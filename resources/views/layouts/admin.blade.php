@props([
    'title' => config('app.name', 'Laravel'),
    'breadcrumbs' => []
])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @@ -36,11 +37,11 @@

    <div class="p-4 sm:ml-64">
        <!--Margin top 14px-->
        <div class="mt-14 flex items-center justify-between w-full">
            @include('layouts.includes.admin.breadcrumb')
            {{ $action ?? '' }}
        </div>
        {{ $slot }}
    </div>

    @stack('modals')
    @@ -49,10 +50,41 @@
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- Mostrar Sweet Alert --}}
    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif

    <script>
        // Buscar todos los elementos de una clase específica
        const forms = document.querySelectorAll('.delete-form');

        forms.forEach(form => {
            // Se pone al pendiente de cualquier acción submit
            form.addEventListener('submit', function(e) {
                // Evita que el formulario se envíe
                e.preventDefault();

                // Mostrar el modal de confirmación
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "No podrás revertir esta acción",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    // Borra el registro SOLO si confirma
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>

    </body>
</html>
