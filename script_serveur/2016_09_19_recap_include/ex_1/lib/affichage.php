<?php
function aff_txt($t){
    $txt;
    switch($t){
        case "home":
            $txt = "
                <div class='nine columns'>
                    <h1>Laheurte & associés</h1>
                    <h2>Cabinet d'avocats</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo laoreet tempor. Integer aliquam bibendum sollicitudin. 
                        Aenean urna ex, pellentesque eu rhoncus et, pharetra tincidunt mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                        Donec molestie aliquam molestie. Nullam at fermentum erat. Cras eu augue pharetra leo cursus dapibus at nec est.
                    </p>
                    <p>
                        Maecenas bibendum nisl vel ipsum lacinia, sed rutrum nibh fermentum. Phasellus vestibulum at ligula at condimentum. 
                        Quisque nec urna augue. Vivamus dui lorem, lobortis quis cursus vitae, consectetur a urna. Donec ut varius orci, eget sollicitudin ipsum. 
                        Duis mattis laoreet ex ac lobortis. In sapien magna, ultricies eget efficitur id, congue quis neque. Cras bibendum pulvinar mollis. 
                        Donec non condimentum odio. Nam vulputate vitae nisl in congue. Curabitur volutpat rhoncus arcu, in ornare nisl. 
                        Etiam dictum, arcu at efficitur fringilla, urna nulla hendrerit leo, dapibus pharetra nisi ex sed risus. Nam accumsan tortor sapien, 
                        ut vehicula ligula pharetra eu. Maecenas ut fermentum mi, vel sollicitudin urna.
                    </p>
                    <p>
                        Aliquam erat volutpat. Proin ultricies dui arcu, tempor auctor quam fringilla vel. Nam a accumsan quam, in imperdiet magna. 
                        Proin pellentesque rutrum justo id dapibus. In vel bibendum nunc, a efficitur lectus. Donec blandit et risus eu sodales. 
                        Pellentesque dictum, ligula ac sodales feugiat, felis mauris consequat nisi, at dictum sapien diam vitae libero. 
                        Morbi varius ipsum quis dui sodales elementum. Sed ultricies nec ex non tempor. Morbi ultrices metus velit, sed lacinia purus iaculis et. 
                        Proin consectetur tristique luctus. Donec ac porta nisi, et maximus ex. Vivamus vulputate ultrices consectetur. 
                        Curabitur imperdiet cursus nibh vitae blandit. Vivamus vulputate lorem vel dignissim tincidunt. 
                        Vivamus euismod est ut neque porttitor, a tempus ex eleifend.
                    </p>
                    <p>
                        Praesent condimentum, lectus et finibus congue, risus ex lacinia nunc, sed gravida nisl ipsum lacinia libero. Etiam ut dictum ex. 
                        Sed vel diam at lectus pharetra imperdiet et sed elit. Vivamus leo tortor, auctor ac risus sed, consequat accumsan lacus. 
                        Morbi at nisi risus. Nulla finibus tellus vitae risus tristique tincidunt. Donec sed auctor nisi.
                    </p>
                    <p>
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                        Nunc euismod egestas lectus, sed ultricies mi lacinia sit amet. Sed aliquet sollicitudin dui in tincidunt. Duis volutpat id augue ut posuere. 
                        Vivamus eu iaculis odio. Ut molestie ex nec aliquam venenatis. Donec nec eleifend nisi. Donec a eros vel magna bibendum ultrices sit amet in ex. 
                        Etiam vel nisl sit amet turpis suscipit blandit. Integer cursus maximus nunc nec fermentum. 
                        In molestie dolor eu libero venenatis, id hendrerit risus dapibus.
                    </p>
                </div>
                ";
            break;
        
        case "nav":
            $txt = "
                <ul>
                    <li><a href=\"\" title=\"\" >Home</a></li>
                    <li><a href=\"\" title=\"\" >Cabinet</a></li>
                    <li><a href=\"\" title=\"\" >Missions</a></li>
                    <li><a href=\"\" title=\"\" >FAQ</a></li>
                    <li><a href=\"\" title=\"\" >Contact</a></li>
                    <li><a href='admin.php' title=\"connexion à l'espace membre\" ><span class=\"fa fa-sign-in\"></span></a></li>
                </ul>
                ";
            break;
        case "newsbox":
            $txt="
                <div class='three columns' id='news_box'>
                    <ul>
                        <li><a href='' title =''><b>LOREM IPSUM </b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                        <li><a href='' title =''><b>LOREM IPSUM </b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                        <li><a href='' title =''><b>LOREM IPSUM </b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                        
                    </ul>
                </div>
                ";
            break;
                
        
        default:
            $txt = "
                !!! mauvais choix ;) !!!
                ";
            break;
    }
    
    return $txt;
}
?>
