<?php
require_once("userPermissionService.php");
$pageName = basename($_SERVER['PHP_SELF']);

echo "<img src='botrow.png' width = '182' height = '43'><br/><br/>";
$urlToRedirect = '';
$hasPermissions = false;

switch ($pageName) {
    case 'index.php':
    case 'charges.php':
    case 'payout.php':
    case 'pickedup.php':
    case 'pickedup-onedate.php':
    case 'refunds.php':
    case 'rentals.php':
    case 'rentals-onedate.php':
    case 'rentals.php':
    case 'sales.php':
        $permissionToCheck = 'Reports_ACCESS';
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Reports_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'index.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton2\" onclick=\"window.open('index.php', '_top')\">reports</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Reports_ACCESS')) {
            echo "<div class = \"btn_disabled\">reports</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Lookup_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'lookup.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('lookup.php', '_top')\">lookup</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ACCESS')) {
            echo "<div class = \"btn_disabled\">lookup</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Items_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'tickets.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('tickets.php', '_top')\">items</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ACCESS')) {
            echo "<div class = \"btn_disabled\">items</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Settings_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'settings.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('settings.php', '_top')\">settings</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_ACCESS')) {
            echo "<div class = \"btn_disabled\">settings</div>";
        }

        echo "<div class = \"buton1\" onclick=\"window.open('logout.php', '_top')\">logout</div>";
        break;

    case 'lookup.php':
        $permissionToCheck = 'Lookup_ACCESS';
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Reports_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'index.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('index.php', '_top')\">reports</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Reports_ACCESS')) {
            echo "<div class = \"btn_disabled\">reports</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Lookup_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'lookup.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton2\" onclick=\"window.open('lookup.php', '_top')\">lookup</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ACCESS')) {
            echo "<div class = \"btn_disabled\">lookup</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Items_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'tickets.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('tickets.php', '_top')\">items</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ACCESS')) {
            echo "<div class = \"btn_disabled\">items</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Settings_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'settings.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('settings.php', '_top')\">settings</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_ACCESS')) {
            echo "<div class = \"btn_disabled\">settings</div>";
        }

        echo "<div class = \"buton1\" onclick=\"window.open('logout.php', '_top')\">logout</div>";
        break;

    case 'tickets.php':
    case 'daily.php':
    case 'disable.php':
    case 'inventory.php':
    case 'passes.php':
    case 'pcodes.php':
    case 'promo.php':
    case 'promo2.php':
    case 'rentalinv.php':
    case 'rinv.php':
    case 'weekly.php':
        $permissionToCheck = 'Items_ACCESS';
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Reports_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'index.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('index.php', '_top')\">reports</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Reports_ACCESS')) {
            echo "<div class = \"btn_disabled\">reports</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Lookup_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'lookup.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('lookup.php', '_top')\">lookup</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ACCESS')) {
            echo "<div class = \"btn_disabled\">lookup</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Items_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'tickets.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton2\" onclick=\"window.open('tickets.php', '_top')\">items</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ACCESS')) {
            echo "<div class = \"btn_disabled\">items</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Settings_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'settings.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('settings.php', '_top')\">settings</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_ACCESS')) {
            echo "<div class = \"btn_disabled\">settings</div>";
        }

        echo "<div class = \"buton1\" onclick=\"window.open('logout.php', '_top')\">logout</div>";
        break;

    case 'settings.php':
    case 'method.php':
    case 'userManagement.php':
    case 'emailMarketing.php':
    case 'waiver.php':
        $permissionToCheck = 'Settings_ACCESS';
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Reports_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'index.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('index.php', '_top')\">reports</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Reports_ACCESS')) {
            echo "<div class = \"btn_disabled\">reports</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Lookup_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'lookup.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('lookup.php', '_top')\">lookup</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ACCESS')) {
            echo "<div class = \"btn_disabled\">lookup</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Items_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'tickets.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('tickets.php', '_top')\">items</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ACCESS')) {
            echo "<div class = \"btn_disabled\">items</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Settings_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'settings.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton2\" onclick=\"window.open('settings.php', '_top')\">settings</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_ACCESS')) {
            echo "<div class = \"btn_disabled\">settings</div>";
        }

        echo "<div class = \"buton1\" onclick=\"window.open('logout.php', '_top')\">logout</div>";
        break;
        
    default:
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Reports_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'index.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton2\" onclick=\"window.open('index.php', '_top')\">reports</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Reports_ACCESS')) {
            echo "<div class = \"btn_disabled\">reports</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Lookup_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'lookup.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('lookup.php', '_top')\">lookup</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ACCESS')) {
            echo "<div class = \"btn_disabled\">lookup</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Items_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'tickets.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('tickets.php', '_top')\">items</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ACCESS')) {
            echo "<div class = \"btn_disabled\">items</div>";
        }
        
        if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Settings_ACCESS')) {
            if ($urlToRedirect == '') {
                $urlToRedirect = 'settings.php';
            }
            $hasPermissions = true;
            echo "<div class = \"buton1\" onclick=\"window.open('settings.php', '_top')\">settings</div>";
        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_ACCESS')) {
            echo "<div class = \"btn_disabled\">settings</div>";
        }

        echo "<div class = \"buton1\" onclick=\"window.open('logout.php', '_top')\">logout</div>";
        break;
}



if (!GetUserPermissionsByDescription('Admin')) {
    if (!userHasPermissionsForThisPage($pageName) and $urlToRedirect !== '') {
        ?>
        <script>
		    window.location.href = './<?php $urlToRedirect ?>';
		</script>
    <?php
    } else if(!userHasPermissionsForThisPage($pageName) and $urlToRedirect == ''){
        ?>
		<script>
            alert("You do not have access to this application.");
            window.location.href = "./logout.php";
		</script>
		<?php
    }
}

function userHasPermissionsForThisPage($pageName){
    $permission = '';
    switch ($pageName) {
        case 'index.php':
            $permission = 'Reports_ACCESS';
            break;
        case 'charges.php':
            $permission = 'Reports_CHARGES';
            break;
        case 'emailMarketing.php':
            $permission = 'Email_ACCESS';
            break;
        case 'payout.php':
            $permission = 'Reports_PAYOUT';
            break;
        case 'pickedup.php':
            $permission = 'Reports_TICKETS';
            break;
        case 'pickedup-onedate.php':
            $permission = 'Reports_TICKETS';
            break;
        case 'refunds.php':
            $permission = 'Reports_REFUNDS';
            break;
        case 'rentals.php':
            $permission = 'Reports_RENTALS';
            break;
        case 'rentals-onedate.php':
            $permission = 'Reports_RENTALS';
            break;
        case 'sales.php':
            $permission = 'Reports_SALES';
            break;
        case 'lookup.php':
            $permission = 'Lookup_ACCESS';
            break;
        case 'tickets.php':
            $permission = 'Items_ACCESS';
            break;
        case 'daily.php':
            $permission = 'Items_DAILY';
            break;
        case 'disable.php':
            $permission = 'Items_ENABLEDISABLE';
            break;
        case 'inventory.php':
            $permission = 'Items_INVENTORY';
            break;
        case 'passes.php':
            $permission = 'Items_SEASON';
            break;
        case 'pcodes.php':
            $permission = 'Items_PROMOCODES';
            break;
        case 'promo.php':
            $permission = 'Items_PROMOCODES';
            break;
        case 'promo2.php':
            $permission = 'Items_PROMOCODES';
            break;
        case 'rentalinv.php':
            $permission = 'Items_RENTALINVENTORY';
            break;
        case 'rinv.php':
            $permission = 'Items_RENTALINVENTORY';
            break;
        case 'weekly.php':
            $permission = 'Items_WEEKLY';
            break;
        case 'settings.php':
            $permission = 'Settings_ACCESS';
            break;
        case 'method.php':
            $permission = 'Settings_LOCATIONS';
            break;
        case 'userManagement.php':
            $permission = 'Admin';
            break;
        case 'waiver.php':
            $permission = 'Settings_WAIVER';
            break;
        default:
            return true;
            break;
    }

    if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription($permission)) {
        return true;
    }else{
        return false;
    }
}



