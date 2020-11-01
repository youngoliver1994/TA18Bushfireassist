<?php
function displayTable()
{
    echo '<table border="3" style= "color: #000000; margin: 0 auto; width:1000px;">
            <tr>
            <th style="width: 15%;"><center><strong><img src="https://img.icons8.com/material/24/000000/worldwide-location--v1.png"/> Locality</strong></center></th>
            <th style="width: 15%;"><center><strong><img src="https://img.icons8.com/ios-glyphs/30/000000/fire-element--v1.png"/> Fire Events</strong></center></th>
            <th style="width: 10%;"><center><strong><img src="https://img.icons8.com/material/24/000000/severity.png"/> Severity</strong></center></th>
          </tr>';

}

function displayResults($results)
{
    foreach ($results as $print)
    {?>
        <tr>
        <!-- display the locality with the postcode -->
        <td style="width: 20%;"><center><?php echo ucwords(strtolower($print->locality)); ?><?php echo ', '; ?><?php echo ' '; ?><?php echo $print->postcode; ?></center></td>
        <td style="width: 15%;"><center><strong><?php echo $print->fire_occurrences; ?></strong></center></td>
        <!-- display the severity levels as icons -->
        <td style="width: 10%;"><center>
            
        <?php
        if ($print->levels == "Critical")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#ff0000"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#ff0000"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M99.09785,169.84993c-1.22124,0 -1.82756,-0.81703 -2.02967,-1.16964c-0.20211,-0.35261 -0.61062,-1.28574 0,-2.34358l34.20337,-59.23882c0.61062,-1.05784 1.62116,-1.17394 2.02967,-1.17394c0.40851,0 1.41905,0.1118 2.02967,1.16964l34.20337,59.23882c0.61062,1.05784 0.20211,1.99097 0,2.34358c-0.20211,0.35261 -0.80843,1.16964 -2.02967,1.16964h-68.40673z" fill="#ffeea3"></path><path d="M133.30121,108.07402l0.16771,0.0946l34.20337,59.23882l-0.16771,0.29241h-68.40673l-0.16771,-0.28811l34.20337,-59.23882c0.0301,-0.0516 0.0559,-0.0989 0.16771,-0.0989M133.30121,103.77388c-1.51365,0 -3.0273,0.74823 -3.89163,2.24468l-34.19907,59.24312c-1.73296,2.9929 0.43001,6.73833 3.88733,6.73833h68.40243c3.45732,0 5.62029,-3.74543 3.89163,-6.73833l-34.19907,-59.23882c-0.86433,-1.50075 -2.37798,-2.24898 -3.89163,-2.24898z" fill="#ba9b48"></path></g><path d="M133.45172,160.94432c-1.21264,0 -2.21458,-0.36981 -3.0058,-1.10514c-0.79123,-0.73533 -1.18684,-1.62976 -1.18684,-2.67469c0,-1.09224 0.39991,-1.98667 1.19544,-2.68759c0.79553,-0.70092 1.79316,-1.04924 2.9929,-1.04924c1.21264,0 2.21028,0.35261 2.9843,1.05784c0.77403,0.70522 1.16104,1.59965 1.16104,2.67469c0,1.09224 -0.38271,1.99527 -1.14814,2.70909c-0.76543,0.71812 -1.76306,1.07504 -2.9929,1.07504zM137.18425,127.76869l-0.88583,22.49407h-5.831l-0.84283,-22.49407z" fill="#36404d"></path></g></g></g></g></svg>', 1);
        }

        else if ($print->levels == "Extreme")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#de6262"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#de6262"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M99.09785,169.84993c-1.22124,0 -1.82756,-0.81703 -2.02967,-1.16964c-0.20211,-0.35261 -0.61062,-1.28574 0,-2.34358l34.20337,-59.23882c0.61062,-1.05784 1.62116,-1.17394 2.02967,-1.17394c0.40851,0 1.41905,0.1118 2.02967,1.16964l34.20337,59.23882c0.61062,1.05784 0.20211,1.99097 0,2.34358c-0.20211,0.35261 -0.80843,1.16964 -2.02967,1.16964h-68.40673z" fill="#ffeea3"></path><path d="M133.30121,108.07402l0.16771,0.0946l34.20337,59.23882l-0.16771,0.29241h-68.40673l-0.16771,-0.28811l34.20337,-59.23882c0.0301,-0.0516 0.0559,-0.0989 0.16771,-0.0989M133.30121,103.77388c-1.51365,0 -3.0273,0.74823 -3.89163,2.24468l-34.19907,59.24312c-1.73296,2.9929 0.43001,6.73833 3.88733,6.73833h68.40243c3.45732,0 5.62029,-3.74543 3.89163,-6.73833l-34.19907,-59.23882c-0.86433,-1.50075 -2.37798,-2.24898 -3.89163,-2.24898z" fill="#ba9b48"></path></g><path d="M133.45172,160.94432c-1.21264,0 -2.21458,-0.36981 -3.0058,-1.10514c-0.79123,-0.73533 -1.18684,-1.62976 -1.18684,-2.67469c0,-1.09224 0.39991,-1.98667 1.19544,-2.68759c0.79553,-0.70092 1.79316,-1.04924 2.9929,-1.04924c1.21264,0 2.21028,0.35261 2.9843,1.05784c0.77403,0.70522 1.16104,1.59965 1.16104,2.67469c0,1.09224 -0.38271,1.99527 -1.14814,2.70909c-0.76543,0.71812 -1.76306,1.07504 -2.9929,1.07504zM137.18425,127.76869l-0.88583,22.49407h-5.831l-0.84283,-22.49407z" fill="#36404d"></path></g></g></g></g></svg>', 1);
        }

        else if ($print->levels == "Very High")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#ffa339"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#ffa339"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M99.09785,169.84993c-1.22124,0 -1.82756,-0.81703 -2.02967,-1.16964c-0.20211,-0.35261 -0.61062,-1.28574 0,-2.34358l34.20337,-59.23882c0.61062,-1.05784 1.62116,-1.17394 2.02967,-1.17394c0.40851,0 1.41905,0.1118 2.02967,1.16964l34.20337,59.23882c0.61062,1.05784 0.20211,1.99097 0,2.34358c-0.20211,0.35261 -0.80843,1.16964 -2.02967,1.16964h-68.40673z" fill="#ffeea3"></path><path d="M133.30121,108.07402l0.16771,0.0946l34.20337,59.23882l-0.16771,0.29241h-68.40673l-0.16771,-0.28811l34.20337,-59.23882c0.0301,-0.0516 0.0559,-0.0989 0.16771,-0.0989M133.30121,103.77388c-1.51365,0 -3.0273,0.74823 -3.89163,2.24468l-34.19907,59.24312c-1.73296,2.9929 0.43001,6.73833 3.88733,6.73833h68.40243c3.45732,0 5.62029,-3.74543 3.89163,-6.73833l-34.19907,-59.23882c-0.86433,-1.50075 -2.37798,-2.24898 -3.89163,-2.24898z" fill="#ba9b48"></path></g><path d="M133.45172,160.94432c-1.21264,0 -2.21458,-0.36981 -3.0058,-1.10514c-0.79123,-0.73533 -1.18684,-1.62976 -1.18684,-2.67469c0,-1.09224 0.39991,-1.98667 1.19544,-2.68759c0.79553,-0.70092 1.79316,-1.04924 2.9929,-1.04924c1.21264,0 2.21028,0.35261 2.9843,1.05784c0.77403,0.70522 1.16104,1.59965 1.16104,2.67469c0,1.09224 -0.38271,1.99527 -1.14814,2.70909c-0.76543,0.71812 -1.76306,1.07504 -2.9929,1.07504zM137.18425,127.76869l-0.88583,22.49407h-5.831l-0.84283,-22.49407z" fill="#36404d"></path></g></g></g></g></svg>', 1);
        }

        else if ($print->levels == "High")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#ffde39"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#ffde39"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M99.09785,169.84993c-1.22124,0 -1.82756,-0.81703 -2.02967,-1.16964c-0.20211,-0.35261 -0.61062,-1.28574 0,-2.34358l34.20337,-59.23882c0.61062,-1.05784 1.62116,-1.17394 2.02967,-1.17394c0.40851,0 1.41905,0.1118 2.02967,1.16964l34.20337,59.23882c0.61062,1.05784 0.20211,1.99097 0,2.34358c-0.20211,0.35261 -0.80843,1.16964 -2.02967,1.16964h-68.40673z" fill="#ffeea3"></path><path d="M133.30121,108.07402l0.16771,0.0946l34.20337,59.23882l-0.16771,0.29241h-68.40673l-0.16771,-0.28811l34.20337,-59.23882c0.0301,-0.0516 0.0559,-0.0989 0.16771,-0.0989M133.30121,103.77388c-1.51365,0 -3.0273,0.74823 -3.89163,2.24468l-34.19907,59.24312c-1.73296,2.9929 0.43001,6.73833 3.88733,6.73833h68.40243c3.45732,0 5.62029,-3.74543 3.89163,-6.73833l-34.19907,-59.23882c-0.86433,-1.50075 -2.37798,-2.24898 -3.89163,-2.24898z" fill="#ba9b48"></path></g><path d="M133.45172,160.94432c-1.21264,0 -2.21458,-0.36981 -3.0058,-1.10514c-0.79123,-0.73533 -1.18684,-1.62976 -1.18684,-2.67469c0,-1.09224 0.39991,-1.98667 1.19544,-2.68759c0.79553,-0.70092 1.79316,-1.04924 2.9929,-1.04924c1.21264,0 2.21028,0.35261 2.9843,1.05784c0.77403,0.70522 1.16104,1.59965 1.16104,2.67469c0,1.09224 -0.38271,1.99527 -1.14814,2.70909c-0.76543,0.71812 -1.76306,1.07504 -2.9929,1.07504zM137.18425,127.76869l-0.88583,22.49407h-5.831l-0.84283,-22.49407z" fill="#36404d"></path></g></g></g></g></svg>', 1);
        }

        else if ($print->levels == "Moderate")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#7ddae7"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#7ddae7"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M133.3,169.85c-17.4279,0 -32.3833,-18.6792 -36.0555,-23.65c3.6722,-4.9665 18.6577,-23.65 36.0555,-23.65c17.4279,0 32.3833,18.6792 36.0555,23.65c-3.6722,4.9665 -18.6577,23.65 -36.0555,23.65z" fill="#ffffff"></path><g fill="#ba9b48"><path d="M133.3,124.7c15.1833,0 28.6552,15.437 33.3594,21.5c-4.7042,6.063 -18.1761,21.5 -33.3594,21.5c-15.1833,0 -28.6552,-15.437 -33.3594,-21.5c4.7042,-6.063 18.1761,-21.5 33.3594,-21.5M133.3,120.4c-21.3753,0 -38.7,25.8 -38.7,25.8c0,0 17.3247,25.8 38.7,25.8c21.3753,0 38.7,-25.8 38.7,-25.8c0,0 -17.3247,-25.8 -38.7,-25.8z"></path></g></g><g><circle cx="31" cy="34" transform="scale(4.3,4.3)" r="3.5" fill="#8bb7f0"></circle><path d="M133.3,133.3c7.1122,0 12.9,5.7878 12.9,12.9c0,7.1122 -5.7878,12.9 -12.9,12.9c-7.1122,0 -12.9,-5.7878 -12.9,-12.9c0,-7.1122 5.7878,-12.9 12.9,-12.9M133.3,129c-9.4987,0 -17.2,7.7013 -17.2,17.2c0,9.4987 7.7013,17.2 17.2,17.2c9.4987,0 17.2,-7.7013 17.2,-17.2c0,-9.4987 -7.7013,-17.2 -17.2,-17.2z" fill="#4e7ab5"></path></g><g fill="#36404d"><circle cx="31" cy="34" transform="scale(4.3,4.3)" r="1.5"></circle></g><g fill="#ffffff"><circle cx="33.5" cy="31.5" transform="scale(4.3,4.3)" r="1.5"></circle></g></g></g></g></g></svg>', 1);
        }

        else if ($print->levels == "Low")
        {
            echo str_repeat('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="40" height="40"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M139.2125,113.95c0,28.4961 -23.822,51.6 -53.2125,51.6c-29.3905,0 -53.2125,-23.1039 -53.2125,-51.6c0,-38.7 48.7792,-70.95 48.7792,-107.5c11.0811,5.3707 28.8229,24.3595 28.8229,49.45c0,10.75 -2.2188,21.5 -2.2188,21.5c13.3042,-4.3 13.3042,-19.35 13.3042,-19.35c0,0 17.7375,23.65 17.7375,55.9z" fill="#b2eefa"></path><path d="M85.1185,75.25c0.4687,2.2575 0.7224,4.5924 0.7224,6.9875c0,26.0967 -28.0489,28.1048 -31.4459,48.9813c-2.4467,15.0113 5.7233,34.3355 30.5042,34.3355c18.2965,0 33.1229,-16.1809 33.1229,-36.1372c0,-19.7026 -27.3695,-53.3028 -32.9036,-54.1671z" fill="#ffeea3"></path><path d="M86,167.7c-30.5257,0 -55.3625,-24.1101 -55.3625,-53.75c0,-20.3046 12.8613,-38.7215 25.2969,-56.5364c12.0744,-17.2903 23.478,-33.626 23.478,-50.9636c0,-0.7396 0.3784,-1.4319 1.0062,-1.8232c0.6278,-0.387 1.4147,-0.4386 2.0812,-0.1118c12.47,6.0458 30.0355,25.9849 30.0355,51.385c0,6.8929 -0.8772,13.7041 -1.5394,17.8665c8.2173,-5.0095 8.3248,-15.5961 8.3248,-15.7165c0,-0.9245 0.5934,-1.7458 1.4706,-2.0382c0.8815,-0.2924 1.8447,0.0043 2.3994,0.7482c0.7439,0.989 18.1675,24.596 18.1675,57.19c0.0043,29.6399 -24.8325,53.75 -55.3582,53.75zM83.5662,10.0448c-1.4362,17.3677 -12.9473,33.8539 -24.1015,49.8327c-12.0615,17.2645 -24.5272,35.1224 -24.5272,54.0725c0,27.2663 22.9061,49.45 51.0625,49.45c28.1564,0 51.0625,-22.1837 51.0625,-49.45c0,-23.0222 -9.3869,-41.7487 -14.3319,-50.0262c-1.3846,5.2761 -4.9149,12.6205 -13.8933,15.523c-0.7224,0.2408 -1.5265,0.0688 -2.0941,-0.4429c-0.5719,-0.5117 -0.8256,-1.2857 -0.6708,-2.0382c0.0215,-0.1032 2.1715,-10.6726 2.1715,-21.0657c-0.0043,-21.3065 -13.803,-38.8849 -24.6777,-45.8552z" fill="#b2eefa"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><g id="Layer_1"><g><path d="M133.3,169.85c-17.4279,0 -32.3833,-18.6792 -36.0555,-23.65c3.6722,-4.9665 18.6577,-23.65 36.0555,-23.65c17.4279,0 32.3833,18.6792 36.0555,23.65c-3.6722,4.9665 -18.6577,23.65 -36.0555,23.65z" fill="#ffffff"></path><g fill="#ba9b48"><path d="M133.3,124.7c15.1833,0 28.6552,15.437 33.3594,21.5c-4.7042,6.063 -18.1761,21.5 -33.3594,21.5c-15.1833,0 -28.6552,-15.437 -33.3594,-21.5c4.7042,-6.063 18.1761,-21.5 33.3594,-21.5M133.3,120.4c-21.3753,0 -38.7,25.8 -38.7,25.8c0,0 17.3247,25.8 38.7,25.8c21.3753,0 38.7,-25.8 38.7,-25.8c0,0 -17.3247,-25.8 -38.7,-25.8z"></path></g></g><g><circle cx="31" cy="34" transform="scale(4.3,4.3)" r="3.5" fill="#8bb7f0"></circle><path d="M133.3,133.3c7.1122,0 12.9,5.7878 12.9,12.9c0,7.1122 -5.7878,12.9 -12.9,12.9c-7.1122,0 -12.9,-5.7878 -12.9,-12.9c0,-7.1122 5.7878,-12.9 12.9,-12.9M133.3,129c-9.4987,0 -17.2,7.7013 -17.2,17.2c0,9.4987 7.7013,17.2 17.2,17.2c9.4987,0 17.2,-7.7013 17.2,-17.2c0,-9.4987 -7.7013,-17.2 -17.2,-17.2z" fill="#4e7ab5"></path></g><g fill="#36404d"><circle cx="31" cy="34" transform="scale(4.3,4.3)" r="1.5"></circle></g><g fill="#ffffff"><circle cx="33.5" cy="31.5" transform="scale(4.3,4.3)" r="1.5"></circle></g></g></g></g></g></svg>', 1);
        }
        ?></center></td>
        </tr>
<?php
    }
}

global $wpdb;
$search_query = ($_POST['value']);

// if a postcode has been entered, retrieve how many rows in the table contain this postcode that have a fire occurrence of more than 0
if ($search_query != '')
{
    $count = $wpdb->get_var("SELECT COUNT(*) FROM `wpstg0_fire_events` WHERE postcode like '$search_query' and fire_occurrences > 0;");

    // if no rows have been found, display the following message
    if ($count == 0)
    {
        echo '<center> No recent fire occurrences recorded for Postcode ';
        echo '<strong>' . $search_query . '</strong>';
        echo '</center><br>';
    }

    // if rows have been found, display message showing number of localities with recent fire occurrences
    else
    {
        echo '<center> Found ';
        echo '<strong>' . $count . '</strong>';
        echo ' localities in Victoria with <strong> recent <strong> fire occurrences </center><br>';

        // display Refresh Results button
        {?>
         <input type="button" value="Refresh Results" style="float:left; background-color:black" onClick="location.href=location.href">
        <?php
        }
        echo '<br><br>';

        // call displayTable function
        displayTable();

        // retrieve the results
        $results = $wpdb->get_results("SELECT * FROM `wpstg0_fire_events` WHERE postcode like '$search_query'  and fire_occurrences > 0;");

        // call displayResults function
        displayResults($results);
        echo '</table>';
    }
}

// if no postcode has been entered, display table with details of the top 7 most fire-impacted localities
else
{
    displayTable();

    $results = $wpdb->get_results("SELECT * FROM `wpstg0_fire_events`
LIMIT 7;");

    displayResults($results);

    echo '</table>';
}

?>
