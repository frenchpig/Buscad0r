document.addEventListener('DOMContentLoaded', function () {
    const btnExportSingle = document.getElementById('btnExportSingle');
    const btnExportMultiple = document.getElementById('btnExportMultiple');
    const exportSpinner = document.getElementById('exportSpinner');

    async function fetchDatabaseData() {
        exportSpinner.classList.remove('d-none');
        btnExportSingle.disabled = true;
        btnExportMultiple.disabled = true;

        try {
            const response = await fetch('/export-database');
            if (!response.ok) {
                throw new Error('Error al obtener la base de datos');
            }
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error:', error);
            alert('Hubo un error al exportar la base de datos.');
            return null;
        } finally {
            exportSpinner.classList.add('d-none');
            btnExportSingle.disabled = false;
            btnExportMultiple.disabled = false;
        }
    }

    // Exportación en 1 solo archivo (múltiples hojas)
    btnExportSingle.addEventListener('click', async function () {
        const dbData = await fetchDatabaseData();
        if (!dbData) return;

        // Crear nuevo libro de trabajo
        const wb = XLSX.utils.book_new();

        // Añadir cada tabla como una nueva hoja
        if(dbData.servicios) {
            const wsServicios = XLSX.utils.json_to_sheet(dbData.servicios);
            XLSX.utils.book_append_sheet(wb, wsServicios, "Servicios");
        }
        if(dbData.intralot) {
            const wsIntralot = XLSX.utils.json_to_sheet(dbData.intralot);
            XLSX.utils.book_append_sheet(wb, wsIntralot, "Intralot");
        }
        if(dbData.dataloteria) {
            const wsLoteria = XLSX.utils.json_to_sheet(dbData.dataloteria);
            XLSX.utils.book_append_sheet(wb, wsLoteria, "Loteria");
        }
        if(dbData.datorutas) {
            const wsRutas = XLSX.utils.json_to_sheet(dbData.datorutas);
            XLSX.utils.book_append_sheet(wb, wsRutas, "Fibra Oscura");
        }
        if(dbData.data) {
            const wsData = XLSX.utils.json_to_sheet(dbData.data);
            XLSX.utils.book_append_sheet(wb, wsData, "Equipos");
        }

        // Descargar archivo
        XLSX.writeFile(wb, 'Base_de_Datos_Completa.xlsx');

        // Cerrar modal
        const exportModal = bootstrap.Modal.getInstance(document.getElementById('exportModal'));
        if (exportModal) {
            exportModal.hide();
        }
    });

    // Exportación en múltiples archivos (1 por tabla)
    btnExportMultiple.addEventListener('click', async function () {
        const dbData = await fetchDatabaseData();
        if (!dbData) return;

        // Función auxiliar para exportar un archivo individual
        const exportIndividualFile = (dataArray, sheetName, fileName) => {
            if (dataArray && dataArray.length > 0) {
                const wb = XLSX.utils.book_new();
                const ws = XLSX.utils.json_to_sheet(dataArray);
                XLSX.utils.book_append_sheet(wb, ws, sheetName);
                XLSX.writeFile(wb, fileName + '.xlsx');
            }
        };

        exportIndividualFile(dbData.servicios, "Servicios", "DB_Servicios");
        exportIndividualFile(dbData.intralot, "Intralot", "DB_Intralot");
        exportIndividualFile(dbData.dataloteria, "Loteria", "DB_Loteria");
        exportIndividualFile(dbData.datorutas, "Fibra Oscura", "DB_Fibra_Oscura");
        exportIndividualFile(dbData.data, "Equipos", "DB_Equipos");
        
        // Cerrar modal
        const exportModal = bootstrap.Modal.getInstance(document.getElementById('exportModal'));
        if (exportModal) {
            exportModal.hide();
        }
    });
});
