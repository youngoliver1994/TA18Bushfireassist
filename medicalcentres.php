<?php

// display ratings as stars
function displayRatings($print)
{
    if ($print->Rating == 1)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 1);
    }

    else if ($print->Rating > 1 && $print->Rating < 2)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 1);
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M89.58333,14.33333l23.29167,46.94167l51.95833,7.525l-37.625,36.90833l8.95833,51.6l-46.58333,-24.36667l-46.58333,24.36667l8.95833,-51.6l-37.625,-36.90833l51.95833,-7.525z" fill="#ffecb3"></path><path d="M89.58333,132.94167v-118.60833l-23.29167,46.94167l-51.95833,7.525l37.625,36.90833l-8.95833,51.6z" fill="#ffca28"></path></g></g></svg>', 1);
    }

    else if ($print->Rating == 2)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 2);
    }

    else if ($print->Rating > 2 && $print->Rating < 3)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 2);
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M89.58333,14.33333l23.29167,46.94167l51.95833,7.525l-37.625,36.90833l8.95833,51.6l-46.58333,-24.36667l-46.58333,24.36667l8.95833,-51.6l-37.625,-36.90833l51.95833,-7.525z" fill="#ffecb3"></path><path d="M89.58333,132.94167v-118.60833l-23.29167,46.94167l-51.95833,7.525l37.625,36.90833l-8.95833,51.6z" fill="#ffca28"></path></g></g></svg>', 1);
    }

    else if ($print->Rating == 3)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 3);
    }

    else if ($print->Rating > 3 && $print->Rating < 4)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 3);
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M89.58333,14.33333l23.29167,46.94167l51.95833,7.525l-37.625,36.90833l8.95833,51.6l-46.58333,-24.36667l-46.58333,24.36667l8.95833,-51.6l-37.625,-36.90833l51.95833,-7.525z" fill="#ffecb3"></path><path d="M89.58333,132.94167v-118.60833l-23.29167,46.94167l-51.95833,7.525l37.625,36.90833l-8.95833,51.6z" fill="#ffca28"></path></g></g></svg>', 1);
    }

    else if ($print->Rating == 4)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 4);
    }

    else if ($print->Rating > 4 && $print->Rating < 5)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 4);
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M89.58333,14.33333l23.29167,46.94167l51.95833,7.525l-37.625,36.90833l8.95833,51.6l-46.58333,-24.36667l-46.58333,24.36667l8.95833,-51.6l-37.625,-36.90833l51.95833,-7.525z" fill="#ffecb3"></path><path d="M89.58333,132.94167v-118.60833l-23.29167,46.94167l-51.95833,7.525l37.625,36.90833l-8.95833,51.6z" fill="#ffca28"></path></g></g></svg>', 1);
    }

    else if ($print->Rating == 5)
    {
        echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="35" height="35"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#ffda1c"></stop><stop offset="1" stop-color="#feb705"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g></svg>', 5);
    }

    else
    {
        echo $print->Rating;
    }
}

global $wpdb;
$search_query = ($_POST['value']);
$allow_directions = ($_POST['directions']);

// if a postcode has been entered and the user has selected to display distances, retrieve how many rows in the table contain this postcode
if ($search_query != '' && $allow_directions == "Yes")
{
    $count = $wpdb->get_var("SELECT COUNT(*) FROM `wpstg0_regional_medcen` WHERE Postcode like '$search_query';");

    // if no rows have been found, display the following message
    if ($count == 0)
    {
        echo '<center> Sorry, no primary care medical centres found for Postcode ';
        echo '<strong>' . $search_query . '</strong>';
        echo '. Please enter another postcode. </center><br>';
    }

    // if rows have been found, retrieve user IP address
    else
    {
        // adapted code credits to Naveen DA (https://stackoverflow.com/users/6335029/naveen-da) on Stack Overflow at https://stackoverflow.com/questions/5398674/get-users-current-location
        function get_client_ip()
        {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
            {
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            }
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
            {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            }
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            {
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            }
            else if (isset($_SERVER['HTTP_FORWARDED']))
            {
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            }
            else if (isset($_SERVER['REMOTE_ADDR']))
            {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            }
            else
            {
                $ipaddress = 'UNKNOWN';
            }

            return $ipaddress;
        }
        
        $PublicIP = get_client_ip();
        $json = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        $json = json_decode($json, true);
        $loc = $json['loc'];

        // obtain longitude and latitude of user's current location
        $coordinates = explode(',', $loc);
        $latitude = $coordinates[0];
        $longitude = $coordinates[1];

        // display Refresh Results button
        {?>
         <input type="button" value="Refresh Results" style="float: left; background-color:black" onClick="location.href=location.href">
         <?php
        }
        echo '<br><br>';

        // create sortable table
        echo '<table class="sortable" border="3" style= "color: #000000; margin: 0 auto;">
              <tr>
                 <th class="sorttable_nosort" style="width: 20%;"><center><strong><img src="https://img.icons8.com/android/24/000000/hospital-3.png"/> Medical Centre</strong></center></th>
                 <th class="sorttable_nosort" style="width: 20%;"><center><strong><img src="https://img.icons8.com/material/24/000000/worldwide-location--v1.png"/> Address</strong></center></th>
                 <th class="sorttable_nosort" style="width: 20%;"><center><strong><img src="https://img.icons8.com/fluent-systems-filled/24/000000/star.png"/> Rating</strong></center></th>
                 <th style="width: 20%;"><center><strong><img src="https://img.icons8.com/material-rounded/24/000000/point-objects.png"/> Est. Distance from your Location ⇕</strong></center></th>
                 <th class="sorttable_nosort" style="width: 20%;"><center><strong><img src="https://img.icons8.com/material-sharp/24/000000/compass.png"/> Getting There<strong></center></th>
              </tr>';

        // retrieve the results and display them in the table
        $results = $wpdb->get_results("SELECT * FROM `wpstg0_regional_medcen` WHERE Postcode like '$search_query';");

        foreach ($results as $print)
        {?>
              <tr>
                  <td style="width: 20%;"><?php echo $print->MedicalCentre; ?></td>
                  <td style="width: 20%;"><?php echo $print->Address; ?><?php echo ', '; ?><?php echo $print->Area; ?><?php echo ' '; ?><?php echo $print->Postcode; ?></td>
                  <td style="width: 20%;"><center><?php displayRatings($print); ?></td>
                  <td style="width: 20%;"><?php
         
            // Haversine formula to estimate distance between points
            // adapted code credits to martinstoeckli (https://stackoverflow.com/users/575765/martinstoeckli) on Stack Overflow at https://stackoverflow.com/questions/10053358/measuring-the-distance-between-two-coordinates-in-php
            $latFrom = deg2rad($latitude);
            $lonFrom = deg2rad($longitude);
            $latTo = deg2rad($print->Latitude);
            $lonTo = deg2rad($print->Longitude);

            $lonDelta = $lonTo - $lonFrom;
            $a = pow(cos($latTo) * sin($lonDelta) , 2) + pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta) , 2);
            $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

            $angle = atan2(sqrt($a) , $b);
            echo round($angle * 6371, 2);
            echo ' km';
                  ?></td>    
                  
                  <td style="width: 20%;"><?php echo "<center><a target = '_blank' href=$print->Directions><img src='https://img.icons8.com/office/40/000000/map-marker.png' class='image'></a></center>"; ?></strong></td> 
          </tr>

<?php
        }
        echo '</table>';
    }
}

// if a postcode has been entered but the user has not selected to display distances, retrieve how many rows contain this postcode
else if ($search_query != '' && $allow_directions == '')
{
    $count = $wpdb->get_var("SELECT COUNT(*) FROM `wpstg0_regional_medcen` WHERE Postcode like '$search_query';");

    // if no rows have been found, display the following message
    if ($count == 0)
    {
        echo '<center> Sorry, no primary care medical centres found for Postcode ';
        echo '<strong>' . $search_query . '</strong>';
        echo '. Please enter another postcode. </center><br>';
    }

    // if rows have been found display the results in a table
    else
    {
        {?>
        <input type="button" value="Refresh Results" style="float: left; background-color:black" onClick="location.href=location.href">
        <?php
        }
        echo '<br><br>';

        echo '<table border="3" style= "color: #000000; margin: 0 auto;">
              <tr>
                 <th style="width: 25%;"><center><strong><img src="https://img.icons8.com/android/24/000000/hospital-3.png"/> Medical Centre</strong></center></th>
                 <th style="width: 25%;"><center><strong><img src="https://img.icons8.com/material/24/000000/worldwide-location--v1.png"/> Address</strong></center></th>
                 <th style="width: 25%;"><center><strong><img src="https://img.icons8.com/fluent-systems-filled/24/000000/star.png"/> Rating</strong></center></th>
                 <th style="width: 25%;"><center><strong><img src="https://img.icons8.com/material-sharp/24/000000/compass.png"/> Getting There<strong></center></th>
              </tr>';

        $results = $wpdb->get_results("SELECT * FROM `wpstg0_regional_medcen` WHERE Postcode like '$search_query';");

        foreach ($results as $print)
        {?>
               <tr>
                  <td style="width: 20%;"><?php echo $print->MedicalCentre; ?></td>
                  <td style="width: 20%;"><?php echo $print->Address; ?><?php echo ', '; ?><?php echo $print->Area; ?><?php echo ' '; ?><?php echo $print->Postcode; ?></td>
                  <td style="width: 20%;"><center><?php displayRatings($print); ?></td>
                  <td style="width: 20%;"><?php echo "<center><a target = '_blank' href=$print->Directions><img src='https://img.icons8.com/office/40/000000/map-marker.png' class='image'></a></center>"; ?></strong></td> 
               </tr>
<?php
        }
        echo '</table>';
    }
}
?>
