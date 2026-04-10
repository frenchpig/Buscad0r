@if(Auth::check() && Auth::user()->force_password_change)
<div class="modal fade" id="forcePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="forcePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-light">
            <form action="{{ route('force.password.update') }}" method="POST">
                @csrf
                <div class="modal-header bg-danger text-white border-0">
                    <h5 class="modal-title" id="forcePasswordModalLabel">Actualización Obligatoria de Contraseña</h5>
                </div>
                <div class="modal-body">
                    <p>Por motivos de seguridad, debe cambiar su contraseña temporal por una nueva antes de poder continuar.</p>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">Las contraseñas no coinciden o no cumplen con los requisitos (mínimo 8 caracteres).</div>
                    @endif
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Nueva Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password" name="new_password" required minlength="8" placeholder="Mínimo 8 caracteres">
                            <button class="btn btn-outline-secondary toggle-password" type="button"><i class="bi bi-eye"></i></button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required minlength="8">
                            <button class="btn btn-outline-secondary toggle-password" type="button"><i class="bi bi-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-danger w-100">Guardar y Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var forceModal = new bootstrap.Modal(document.getElementById('forcePasswordModal'));
        forceModal.show();

        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                }
            });
        });
    });
</script>
@endif
