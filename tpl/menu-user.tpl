<div class="collapse navbar-collapse align-items-center justify-content-end"
    id="navbar_main">
    <!-- BEGIN NAVBAR LINKS -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown ">
            <a href="javascript:void(0)" class="nav-link">
                <i class="icon ion-ios-home-outline icon_nav"></i> Inicio
            </a>
        </li>
       {if $permisos|strstr:"1" or $permisos|strstr:"2"} 
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon ion-ios-clock-outline icon_nav"></i> Rutinas
                </a>
                <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                    <div class="list-group rounded">
                        {if $permisos|strstr:"1" or $permisos|strstr:"2"} 
                            <a href="../routine/list.php"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Listado de Rutinas
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira ver las rutinas creadas</p>
                                </div>
                            </a> 
                        {/if}
                        {if $permisos|strstr:"1" or $permisos|strstr:"2"} 
                            <a href="../routine/"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Web
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina web</p>
                                </div>
                            </a>
                        {/if}
                         {if $permisos|strstr:"1" or $permisos|strstr:"2"} 
                            <a href="../routine/?blue"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Web Blue
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina web Blue</p>
                                </div>
                            </a>
                        {/if}
                        {if $permisos|strstr:"1" or $permisos|strstr:"2"} 
                            <a href="../routine/file.php"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Archivo
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina archivo</p>
                                </div>
                            </a>
                        {/if}
                    </div>
                </div>
            </li>
        {/if}
        {if $permisos|strstr:"1" or $permisos|strstr:"3"} 
        <li class="nav-item dropdown">
             <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-ios-paper-outline icon_nav"></i> Reportes
            </a>
            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                <div class="list-group rounded">
                     <a href="../report/"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Generar Reporte
                            </div>
                            <p class="text-sm mb-0">Esta opción le permitira exportar la información en reportes</p>
                        </div>
                    </a> 

                </div>
            </div>
        </li>
        {/if}
        {if $permisos|strstr:"1" } 
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon ion-ios-settings-strong icon_nav"></i> Configuración
                </a>
                <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                    <div class="list-group rounded">
                        <a href="../users/"
                            class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">
                                    Configuración de usuarios
                                </div>
                                <p class="text-sm mb-0">Esta opción le permitira ver los usuarios del sistema</p>
                            </div>
                        </a> 

                    </div>
                </div>
            </li>
        {/if}
        <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-ios-person-outline icon_nav"></i> Mi Perfil
            </a>
            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                <div class="list-group rounded">
                     {* <a href="../profile/?pass"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Cambiar Contraseña
                            </div>
                            <p class="text-sm mb-0">Esta opción le permitira<br>cambiar de contraseña</p>
                        </div>
                    </a>  *}
                    <a href="../../logout/"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Cerrar Sesion
                            </div>
                            <p class="text-sm mb-0">Esta opción cerrara el sistema</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>