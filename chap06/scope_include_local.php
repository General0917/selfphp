<?php
function checkScope() : string {
    require_once 'scope_included.php';
    return $scope;
}

print checkScope();
print '<br >';
print $scope;