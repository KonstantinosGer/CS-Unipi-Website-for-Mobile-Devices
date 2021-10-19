<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ΚΕΝΤΡΙΚΗ</title>
    <link rel="stylesheet" href="style.css">


    <style>

        #main{
            margin-left: -20px;
        }

        .grab {cursor: pointer;}


        #mytable{
            width: 100%;
            margin-left: -18px;
        }


        #table1,#table2{
            background-color: #ffe6e6;
            margin-left: 5px;
            font-size: 10px;
        }

        #table1 td, #table2 td{
            background-color: #ffe6e6;
            text-align: center;
            padding: 5px 6px;

        }


        .container {
            position: center;
            /*width: 50%;*/
        }

        .image {
            opacity: 1;
            display: block;
            /*width: 100%;*/
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: center;
            /*top: 60%;
            left: 40%;*/
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            margin-left: 10px;
        }


        .text {
            background-color: #ff4d4d;
            color: black;
            font-size: 3px;
            padding: 10px 25px;
            margin-left: -15px;
        }

        .dropdown {
            float: right;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: #fff;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;


            right: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #98AFC7;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #111;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;



            right: 0;
        }

        .dropdown-content a {
            float: none;
            color: #ff4d4d;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            color: #ff4d4d;
            background-color: #2e2e2e;
        }

        /*Automatic Slideshow 1*/

        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}
        img {horiz-align: center;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            /*margin-right: 125px;*/
        }

        /* Caption text */
        .text {
            font-size: 15px;
            background-color: burlywood;
            /*padding: 8px 12px;*/
            /*position: absolute;*/
            /*bottom: 5px;*/
            /*width: 100%;*/
            text-align: center;
            /*margin-left: 20px;*/
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 10px;
            width: 10px;
            margin: -25px 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }



        /*Automatic Slideshow 2*/

        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides2 {display: none;}
        img {vertical-align: middle;}
        img {horiz-align: center;}

        /* Slideshow container */
        .slideshow-container2 {
            max-width: 1000px;
            position: relative;
            /*margin-right: 125px;*/
        }

        /* Caption text */
        .text2 {
            color: #f2f2f2;
            font-size: 10px;
            padding: 8px 12px;
            position: absolute;
            bottom: 5px;
            width: 100%;
            text-align: center;
            margin-left: 20px;
        }

        /* Number text (1/5 etc) */
        .numbertext2 {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots2/bullets/indicators */
        .dot2 {
            height: 10px;
            width: 10px;
            margin: -25px 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active2 {
            background-color: #717171;
        }

        /* Fading animation */
        .fade2 {
            -webkit-animation-name: fade2;
            -webkit-animation-duration: 1.5s;
            animation-name: fade2;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade2 {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade2 {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text2 {font-size: 11px}
        }


        .footer {
            margin-left: -8px;
            margin-bottom: -5px;
            width: 105%;
            background-color: #3b5998;
            color: white;
            text-align: left;
        }

        .footer p {
            color: #f2f2f2;
            font-size: 12px;
        }

        .footer b {
            color: white;
            font-size: 12px;
        }

        .btn-eggrafh:hover {
            cursor: pointer;
        }

    </style>
</head>
<body>
<?php
class News {
    // Properties
    private $title;
    private $description;
    private $article_date;
    private $reference_php;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getArticleDate()
    {
        return $this->article_date;
    }

    /**
     * @return mixed
     */
    public function getReferencePhp()
    {
        return $this->reference_php;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $article_date
     */
    public function setArticleDate($article_date): void
    {
        $this->article_date = $article_date;
    }

    /**
     * @param mixed $reference_php
     */
    public function setReferencePhp($reference_php): void
    {
        $this->reference_php = $reference_php;
    }
}
?>
<nav class="navbar">
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
              <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
              <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
              <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
          </svg>
        </a>

        <img id="logo-image" alt="Unipi logo" src="logo_unipi.png" width="50" height="50" style="float: left; margin-left: 75px; margin-top: 8px;">
        <img id="logo-image2" alt="Unipi logo 2" src="logo_unipi_2.png" width="160" height="80" style="margin-top: -4px;">

        <div class="dropdown">
          <button class="dropbtn" onclick="">&#128240;</button>
          <div id="dropdown-content" class="dropdown-content" hidden>
              <?php
              try {
                  #Connect to database
                  $connection = new PDO("pgsql:host=localhost;dbname=cs_unipi_database", "postgres", "polifolio68");
                  #Query
                  $sql = 'SELECT * from nea_tou_tmhmatos ORDER BY id desc';

                  foreach ($connection->query($sql) as $row) {
                      #Create new object
                      $obj = new News();
                      $obj->setTitle($row["title"]);
                      $obj->setDescription($row["description"]);
                      $obj->setArticleDate($row["article_date"]);
                      $obj->setReferencePhp($row["reference_jsp"]);

                      ?>
                      <a href="<?php echo $obj->getReferencePhp()?>" title=""><?php echo $obj->getArticleDate()?>
                        <p style="font-size: 16px; color: #ccc;"><?php echo $obj->getTitle()?></p>
                      </a>
                      <?php
                  }

                  $connection = null;
              } catch (PDOException $e) {
                  die("Error message: " . $e->getMessage());
              }
              ?>
          </div>
        </div>
      </span>
</nav>


<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">ΚΕΝΤΡΙΚΗ</a>
    <a class="dropdown-btn">ΤΟ ΤΜΗΜΑ &#9660;</a>
    <div class="dropdown-container" hidden>
        <a href="Mhnuma_Proedrou.php">Μήνυμα Προέδρου</a>
        <a href="Diakriseis.php">Διακρίσεις</a>
    </div>
    <a class="dropdown-btn2">ΑΝΑΚΟΙΝΩΣΕΙΣ &#9660;</a>
    <div class="dropdown-container2" hidden>
        <a href="Nea_tou_Tmhmatos.php">Νέα του Τμήματος</a>
        <a href="Dioikhtikes_Prakseis.php">Διοικητικές Πράξεις</a>
    </div>
    <a class="dropdown-btn3">ΣΠΟΥΔΕΣ &#9660;</a>
    <div class="dropdown-container3" hidden>
        <a href="Proptuxiaka.php">Προπτυχιακά</a>
        <a href="Metaptuxiaka.php">Μεταπτυχιακά</a>
        <a href="Didaktorikes_Spoudes.php">Διδακτορικές Σπουδές</a>
        <a href="ELearning.php">eLearning</a>
        <a href="Odhgos_Spoudwn.php">Οδηγός Σπουδών</a>
    </div>
    <a class="dropdown-btn4">ΜΕΛΗ &#9660;</a>
    <div class="dropdown-container4" hidden>
        <a href="Didaskontes.php">Διδάσκοντες</a>
        <a href="Epitimoi_Didaktores.php">Επίτιμοι Διδάκτορες</a>
        <a href="Metadidaktorikoi_Ereunhtes.php">Μεταδιδακτορικοί Ερευνητές</a>
        <a href="Ypopshfioi_Didaktores.php">Υποψήφιοι Διδάκτορες</a>
        <a href="Grammateia.php">Γραμματεία</a>
    </div>
    <a class="dropdown-btn5">ΕΡΕΥΝΑ &#9660;</a>
    <div class="dropdown-container5" hidden>
        <a href="Tomeis_Ereunas.php">Τομείς Έρευνας</a>
        <a href="Epilegmenes_Dhmosieuseis.php">Επιλεγμένες Δημοσιεύσεις</a>
        <a href="Ereunhtika_Erga.php">Ερευνητικά Έργα</a>
        <a href="Ereunhtika_Ergasthria.php">Ερευνητικά Εργαστήρια</a>
    </div>
    <a class="dropdown-btn6">ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9660;</a>
    <div class="dropdown-container6" hidden>
        <a href="Episthmonika_Sunedria.php">Επιστημονικά Συνέδρια</a>
        <a href="Omilies_Dialekseis.php">Ομιλίες, Διαλέξεις</a>
        <a href="Hmerides.php">Ημερίδες</a>
        <a href="Alles_Ekdhlwseis.php">Άλλες Εκδηλώσεις</a>
    </div>
    <a class="dropdown-btn7">ΥΠΗΡΕΣΙΕΣ &#9660;</a>
    <div class="dropdown-container7" hidden>
        <a href="Yphresies_Tmhmatos_kai_Panepisthmiou.php">Υπηρεσίες Τμήματος και Πανεπιστημίου</a>
        <a href="Sunergazomenes_Etairies.php">Συνεργαζόμενες Εταιρίες</a>
    </div>
    <a href="Epikoinwnia.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
</div>



<div id="main">
    <h2>Καλωσήρθατε στο τμήμα Πληροφορικής<br></h2>
    <div class="slideshow-container" style="border-bottom: 1px solid #ddd">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <a href="Mhnuma_Proedrou.php"><img src="25xronia.jpg" class="grab" style="width:110%"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="kentrikh_2.php"><img src="presidentmessage.jpg" class="grab" style="width:110%"></a>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="https://elearning.cs.unipi.gr/"><img src="elearning.jpg" class="grab" style="width:110%"></a>
        </div>


        <div style="text-align:center; margin-top: -20px; margin-left: 30px;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <br><br>

        <br>
        <h2>Μεταπτυχιακά Προγράμματα</h2><br>

        <div class="slideshow-container2" style="border-bottom: 1px solid #ddd">

            <div class="mySlides2 fade2">
                <div class="numbertext2">1 / 4</div>
                <a href="Metaptuxiaka_id_4.php"><img src="master1.jpg" class="grab" style="width:110%"></a>
                <div class="text2" ></div>
            </div>

            <div class="mySlides2 fade2">
                <div class="numbertext2">2 / 4</div>
                <a href="Metaptuxiaka_id_1.php"><img src="master2.jpg" class="grab" style="width:110%"></a>
                <div class="text2"></div>
            </div>

            <div class="mySlides2 fade2">
                <div class="numbertext2">3 / 4</div>
                <a href="Metaptuxiaka_id_2.php"><img src="master3.jpg" class="grab" style="width:110%"></a>
                <div class="text2"></div>
            </div>

            <div class="mySlides2 fade2">
                <div class="numbertext2">4 / 4</div>
                <a href="Metaptuxiaka_id_3.php"><img src="master4.jpg" class="grab" style="width:110%"></a>
                <div class="text2"></div>
            </div>

        </div>
    </div>

    <div style="text-align: center; margin-top: -20px; margin-left: 30px;">
        <span class="dot2"></span>
        <span class="dot2"></span>
        <span class="dot2"></span>
        <span class="dot2"></span>
    </div>
    <br><br><br><br>

    <div>
        <table id = "mytable" align="center" border="0">
            <td style="text-align: center;">
                <h4>Υπηρεσίες</h4>
            </td>
            <td style="text-align: right;">
                <h4>Εργαστήρια</h4>
            </td>
        </table>

        <table id="table1"  border="0" style="display: inline-block; width: 40%; float: left;">
            <tr>
                <td>
                    <div class="container">
                        <p>Oracle Academy</p>
                        <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_1.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_1.jpg" class="grab" alt="oracle" class="image" width="75" height="75"></a>
                    </div>
                </td>
                <td>
                    <div class="container">
                        <p>UNIPI</p>
                        <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_7.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_7.jpg" class="grab" alt="unipi" class="image" width="75" height="75"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>STUDENTS.CS</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_2.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_2.jpg" class="grab" alt="cslabs" width="75" height="75"></a>
                </td>
                <td>
                    <p>Γρ. Διασύνδεσης</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_8.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_8.jpg" class="grab" alt="Γρ. Διασύνδεσης" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Βιβλιοθήκη</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_3.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_3.jpg" class="grab" alt="library" width="75" height="75"></a>
                </td>
                <td>
                    <p>GUNET</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_9.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_9.jpg" class="grab" alt="gunet" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>ΕΥΔΟΞΟΣ</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_4.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_4.jpg" class="grab" alt="eydoxos" width="75" height="75"></a>
                </td>
                <td>
                    <p>STUDENTS</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_10.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_10.jpg" class="grab" alt="studentsunipi" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>helpdesk</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_5.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_5.jpg" class="grab" alt="helpdesk" width="75" height="75"></a>
                </td>
                <td>
                    <p>MSDNAA</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_11.php"><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_11.jpg" class="grab" alt="msdn" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>ΚΕΠΠ</p>
                    <a href="Yphresies_Tmhmatos_kai_Panepisthmiou_id_6.php"></a><img src="Yphresies_Tmhmatos_kai_Panepisthmiou_id_6.jpg" class="grab" alt="ΚΕΠΠ" width="75" height="75"></a>
                </td>
            </tr>
        </table>
        <table id="table2" border="0" style="display: inline-block; width: 40%; float: right;">
            <tr>
                <td>
                    <p>Εργαστήριο Διακριτών Μαθηματικών</p>
                    <a href="Ereunhtiko_Ergasthrio_id_1.php"><img src="Ereynitika_Ergastiria_id_1.jpg" class="grab" alt="oracle" width="75" height="75"></a>
                </td>
                <td>
                    <p>Εγαστήριο Τεχνητής Νοημοσύνης</p>
                    <a href="Ereunhtiko_Ergasthrio_id_9.php"><img src="Ereynitika_Ergastiria_id_9.jpg" class="grab" alt="unipi" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Εγαστήριο Αναγνώρισης Προτύπων</p>
                    <a href="Ereunhtiko_Ergasthrio_id_2.php"><img src="Ereynitika_Ergastiria_id_2.jpg" class="grab" alt="cslabs" width="75" height="75"></a>
                </td>
                <td>
                    <p>Εγαστήριο Τεχνολογίας Λογισμικού</p>
                    <a href="Ereunhtiko_Ergasthrio_id_8.php"><img src="Ereynitika_Ergastiria_id_8.jpg" class="grab" alt="Γρ. Διασύνδεσης" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Εγαστήριο Ασφάλειας</p>
                    <a href="Ereunhtiko_Ergasthrio_id_3.php"><img src="Ereynitika_Ergastiria_id_3.jpg" class="grab" alt="library" width="75" height="75"></a>
                </td>
                <td>
                    <p>Εγαστήριο Συστημάτων Υποστήριξης Αποφάσεων</p>
                    <a href="Ereunhtiko_Ergasthrio_id_7.php"><img src="Ereynitika_Ergastiria_id_7.jpg" class="grab" alt="gunet" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Εγαστήριο Υπολογιστικών Συστημάτων</p>
                    <a href="Ereunhtiko_Ergasthrio_id_4.php"><img src="Ereynitika_Ergastiria_id_4.jpg" class="grab" alt="eydoxos" width="75" height="75"></a>
                </td>
                <td>
                    <p>Εγαστήριο Πληροφοριακών Συστημάτων</p>
                    <a href="Ereunhtiko_Ergasthrio_id_6.php"><img src="Ereynitika_Ergastiria_id_6.jpg" class="grab" alt="studentsunipi" width="75" height="75"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Εγαστήριο Τηλεπικοινιακών Συστημάτων</p>
                    <a href="Ereunhtiko_Ergasthrio_id_5.php"><img src="Ereynitika_Ergastiria_id_5.jpg" class="grab" alt="helpdesk" width="75" height="75"></a>
                </td>
            </tr>
        </table>
    </div>
</div>


<div class="footer">

    <div class="col-lg-5 col-xs-12 about-company">

        <table id="footer-table" align="center" border="0" style="width: 100%; border-bottom: 1px solid #ddd;">
            <tr>
                <td style="width: 66%"><b>ΛΙΣΤΑ ΑΛΛΗΛΟΓΡΑΦΙΑΣ</b></td>
                <td><b>ΚΟΙΝΩΝΙΚΗ ΔΙΚΤΥΩΣΗ</b></td>
            </tr>
            <tr>
                <td><p>Εγγραφείτε στη λίστα αλληλογραφίας του Τμήματος:</p></td>
                <td><p>Βρείτε μας στα:</p></td>
            </tr>
            <tr>
                <td><input type="email" id="femail" name="femail" placeholder="E-mail"><button class="btn-eggrafh" onclick="alertFunction()" style="margin-left: 10px; width: 80px; text-align: center; font-size: 12px; color: #f2f2f2; background-color: darkorange;">ΕΓΓΡΑΦΗ</button></td>
                <td><a href="https://www.facebook.com/cs.unipi" target="_blank"><img src="facebook_logo.png" alt="image_facebook" width="30" height="30"></a></td>
            </tr>
        </table>

    </div>

    <div class="row mt-5">
        <div class="col copyright">
            <p class="" style="font-size: 10px;"><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
        </div>
    </div>
</div>



<script>
    //
    //side-menu
    //
    function openSlideMenu(){
        document.getElementById('side-menu').style.width = '270px';
        document.getElementById('main').style.marginLeft = '270px';
    }

    function closeSlideMenu(){
        document.getElementById('side-menu').style.width = '0';
        document.getElementById('main').style.marginLeft = '0';
    }


    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content.
    This allows the user to have multiple dropdowns without any conflict */
    //
    //ΤΟ ΤΜΗΜΑ
    //
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                dropdown[0].style.backgroundColor = "#111";
                dropdown[0].innerHTML = "ΤΟ ΤΜΗΜΑ &#9660;";
            } else {
                dropdownContent.style.display = "block";
                dropdownContent.style.backgroundColor = "#262626";
                dropdown[0].style.backgroundColor = "green";
                dropdown[0].innerHTML = "ΤΟ ΤΜΗΜΑ &#9650;";
            }
        });
    }

    //
    //ΑΝΑΚΟΙΝΩΣΕΙΣ
    //
    var dropdown2 = document.getElementsByClassName("dropdown-btn2");
    var j;

    for (j = 0; j < dropdown2.length; j++) {
        dropdown2[j].addEventListener("click", function() {
            var dropdownContent2 = this.nextElementSibling;
            if (dropdownContent2.style.display === "block") {
                dropdownContent2.style.display = "none";
                dropdown2[0].style.backgroundColor = "#111";
                dropdown2[0].innerHTML = "ΑΝΑΚΟΙΝΩΣΕΙΣ &#9660;";
            } else {
                dropdownContent2.style.display = "block";
                dropdownContent2.style.backgroundColor = "#262626";
                dropdown2[0].style.backgroundColor = "green";
                dropdown2[0].innerHTML = "ΑΝΑΚΟΙΝΩΣΕΙΣ &#9650;";
            }
        });
    }

    //
    //ΣΠΟΥΔΕΣ
    //
    var dropdown3 = document.getElementsByClassName("dropdown-btn3");
    var k;

    for (k = 0; k < dropdown3.length; k++) {
        dropdown3[k].addEventListener("click", function() {
            var dropdownContent3 = this.nextElementSibling;
            if (dropdownContent3.style.display === "block") {
                dropdownContent3.style.display = "none";
                dropdown3[0].style.backgroundColor = "#111";
                dropdown3[0].innerHTML = "ΣΠΟΥΔΕΣ &#9660;";
            } else {
                dropdownContent3.style.display = "block";
                dropdownContent3.style.backgroundColor = "#262626";
                dropdown3[0].style.backgroundColor = "green";
                dropdown3[0].innerHTML = "ΣΠΟΥΔΕΣ &#9650;";
            }
        });
    }

    //
    //ΜΕΛΗ
    //
    var dropdown4 = document.getElementsByClassName("dropdown-btn4");
    var l;

    for (l = 0; l < dropdown4.length; l++) {
        dropdown4[l].addEventListener("click", function() {
            var dropdownContent4 = this.nextElementSibling;
            if (dropdownContent4.style.display === "block") {
                dropdownContent4.style.display = "none";
                dropdown4[0].style.backgroundColor = "#111";
                dropdown4[0].innerHTML = "ΜΕΛΗ &#9660;";
            } else {
                dropdownContent4.style.display = "block";
                dropdownContent4.style.backgroundColor = "#262626";
                dropdown4[0].style.backgroundColor = "green";
                dropdown4[0].innerHTML = "ΜΕΛΗ &#9650;";
            }
        });
    }

    //
    //ΕΡΕΥΝΑ
    //
    var dropdown5 = document.getElementsByClassName("dropdown-btn5");
    var m;

    for (m = 0; m < dropdown5.length; m++) {
        dropdown5[m].addEventListener("click", function() {
            var dropdownContent5 = this.nextElementSibling;
            if (dropdownContent5.style.display === "block") {
                dropdownContent5.style.display = "none";
                dropdown5[0].style.backgroundColor = "#111";
                dropdown5[0].innerHTML = "ΕΡΕΥΝΑ &#9660;";
            } else {
                dropdownContent5.style.display = "block";
                dropdownContent5.style.backgroundColor = "#262626";
                dropdown5[0].style.backgroundColor = "green";
                dropdown5[0].innerHTML = "ΕΡΕΥΝΑ &#9650;";
            }
        });
    }

    //
    //ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ
    //
    var dropdown6 = document.getElementsByClassName("dropdown-btn6");
    var n;

    for (n = 0; n < dropdown6.length; n++) {
        dropdown6[n].addEventListener("click", function() {
            var dropdownContent6 = this.nextElementSibling;
            if (dropdownContent6.style.display === "block") {
                dropdownContent6.style.display = "none";
                dropdown6[0].style.backgroundColor = "#111";
                dropdown6[0].innerHTML = "ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9660;";
            } else {
                dropdownContent6.style.display = "block";
                dropdownContent6.style.backgroundColor = "#262626";
                dropdown6[0].style.backgroundColor = "green";
                dropdown6[0].innerHTML = "ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9650;";
            }
        });
    }

    //
    //ΥΠΗΡΕΣΙΕΣ
    //
    var dropdown7 = document.getElementsByClassName("dropdown-btn7");
    var p;

    for (p = 0; p < dropdown7.length; p++) {
        dropdown7[p].addEventListener("click", function() {
            var dropdownContent7 = this.nextElementSibling;
            if (dropdownContent7.style.display === "block") {
                dropdownContent7.style.display = "none";
                dropdown7[0].style.backgroundColor = "#111";
                dropdown7[0].innerHTML = "ΥΠΗΡΕΣΙΕΣ &#9660;";
            } else {
                dropdownContent7.style.display = "block";
                dropdownContent7.style.backgroundColor = "#262626";
                dropdown7[0].style.backgroundColor = "green";
                dropdown7[0].innerHTML = "ΥΠΗΡΕΣΙΕΣ &#9650;";
            }
        });
    }


    //
    //ΤΕΛΕΥΤΑΙΑ ΝΕΑ
    //
    var dropdown8 = document.getElementsByClassName("dropbtn");
    var q;

    for (q = 0; q < dropdown8.length; q++) {
        dropdown8[q].addEventListener("click", function() {
            var dropdownContent8 = this.nextElementSibling;
            if (dropdownContent8.style.display === "block") {
                dropdownContent8.style.display = "none";
                dropdown8[0].style.backgroundColor = "#3b5998";
            } else {
                dropdownContent8.style.display = "block";
                dropdownContent8.style.backgroundColor = "#262626";
                dropdown8[0].style.backgroundColor = "#98AFC7";
            }
        });
    }

    //
    //Alert
    //
    function alertFunction() {
        alert("Η εγγραφή έγινε με επιτυχία!");
    }

    <!--Automatic Slideshow 1-->

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 4 seconds
    }

    var slideIndex2 = 0;
    showSlides2();

    function showSlides2() {
        var j;
        var slides2 = document.getElementsByClassName("mySlides2");
        var dots2 = document.getElementsByClassName("dot2");
        for (j = 0; j < slides2.length; j++) {
            slides2[j].style.display = "none";
        }
        slideIndex2++;
        if (slideIndex2 > slides2.length) {slideIndex2 = 1}
        for (j = 0; j < dots2.length; j++) {
            dots2[j].className = dots2[j].className.replace(" active2", "");
        }
        slides2[slideIndex2-1].style.display = "block";
        dots2[slideIndex2-1].className += " active2";
        setTimeout(showSlides2, 3000); // Change image every 3 seconds
    }

</script>
</body>
</html>