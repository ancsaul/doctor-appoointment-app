<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Tarjeta: Total de Citas -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Citas de Hoy</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                </div>
                <div class="bg-blue-100 p-3 rounded-full">
                    <i class="fa-solid fa-calendar-days text-blue-600"></i>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Doctores -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Doctores Activos</p>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                </div>
                <div class="bg-green-100 p-3 rounded-full">
                    <i class="fa-solid fa-user-doctor text-green-600"></i>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Pacientes -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Pacientes Registrados</p>
                    <p class="text-2xl font-bold text-gray-900">243</p>
                </div>
                <div class="bg-purple-100 p-3 rounded-full">
                    <i class="fa-solid fa-users text-purple-600"></i>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Ingresos -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Ingresos del Mes</p>
                    <p class="text-2xl font-bold text-gray-900">$15,230</p>
                </div>
                <div class="bg-yellow-100 p-3 rounded-full">
                    <i class="fa-solid fa-dollar-sign text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Próximas Citas -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Próximas Citas</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-full">
                            <i class="fa-solid fa-clock text-blue-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-medium">Dr. García - Juan Pérez</p>
                            <p class="text-sm text-gray-600">10:30 AM - Consulta General</p>
                        </div>
                    </div>
                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Confirmada</span>
                </div>
                
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-full">
                            <i class="fa-solid fa-clock text-blue-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-medium">Dr. López - María Rodríguez</p>
                            <p class="text-sm text-gray-600">11:00 AM - Cardiología</p>
                        </div>
                    </div>
                    <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Pendiente</span>
                </div>

                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-full">
                            <i class="fa-solid fa-clock text-blue-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-medium">Dr. Martínez - Carlos Silva</p>
                            <p class="text-sm text-gray-600">2:15 PM - Neurología</p>
                        </div>
                    </div>
                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Confirmada</span>
                </div>
            </div>
        </div>

        <!-- Actividad Reciente -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Actividad Reciente</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="bg-green-100 p-2 rounded-full mt-1">
                        <i class="fa-solid fa-plus text-green-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Nuevo paciente registrado</p>
                        <p class="text-xs text-gray-600">Ana Gómez se registró - hace 2 min</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="bg-blue-100 p-2 rounded-full mt-1">
                        <i class="fa-solid fa-calendar text-blue-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Cita agendada</p>
                        <p class="text-xs text-gray-600">Pedro Sánchez - Dr. García - hace 15 min</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="bg-yellow-100 p-2 rounded-full mt-1">
                        <i class="fa-solid fa-edit text-yellow-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Historial actualizado</p>
                        <p class="text-xs text-gray-600">Dr. López actualizó historial - hace 1 hora</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="bg-purple-100 p-2 rounded-full mt-1">
                        <i class="fa-solid fa-file-medical text-purple-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Resultado de laboratorio</p>
                        <p class="text-xs text-gray-600">Análisis de sangre - Laura Torres - hace 2 horas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>    