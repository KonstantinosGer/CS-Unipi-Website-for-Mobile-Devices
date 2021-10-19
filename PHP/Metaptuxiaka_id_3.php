<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Μεταπτυχιακά</title>
    <link rel="stylesheet" href="style.css">


    <style>

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


        #main {
            margin-left: -15px;
        }

        .demo {
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:0px;
            font-size: 11px;
        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:0px;
            background:#F0F0F0;
            font-size: 11px;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:0px;
            font-size: 11px;
        }

        /****

        orange button

        ********/
        .btn-1 {
            background-color: #F27935;
        }
        .btn-1 .round {
            background-color: #f59965;
        }

        a {
            text-decoration: none;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
            padding: 12px 53px 12px 23px;
            color: #fff;
            text-transform: uppercase;
            font-family: sans-serif;
            font-weight: bold;
            position: relative;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            display: inline-block;
        }
        a span {
            position: relative;
            z-index: 3;
        }
        a .round {
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            position: absolute;
            right: 3px;
            top: 3px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            z-index: 2;
        }
        a .round i {
            position: absolute;
            top: 50%;
            margin-top: -6px;
            left: 50%;
            margin-left: -4px;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .txt {
            font-size: 14px;
            line-height: 1.45;
        }

        .type-1 a:hover {
            padding-left: 48px;
            padding-right: 28px;
        }
        .type-1 a:hover .round {
            width: calc(100% - 6px);
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
        }
        .type-1 a:hover .round i {
            left: 12%;
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
    <h2>ΠΜΣ "Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας"</h2>
    <br>
    <div class="type-1">
        <div>
            <a href="Aithsh_gia_eggrafh_id_3.php" class="btn btn-1">
                <span class="txt">Αίτηση για εγγραφή</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
        </div>
    </div>
    <br>
    <br>
    <table id ="table_kat" align="center" border="0" style="width: 100%;">
        <tr>
            <td><button id="button_kat_1" style="background-color: #b3ccff; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_3_kateuthunseis.php">Κατευθύνσεις</a></button></td>
        </tr>
    </table>
    <br>
    <h3 style="color: #0066cc"><u>Συνοπτική παρουσίαση</u></h3>
    <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών (ΠΜΣ) «Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας» (Distributed Systems, Security and Emerging Information Technologies), έχει ως αντικείμενο την εκπαίδευση νέων επιστημόνων στις επιστημονικές περιοχές της Ασφάλειας Δικτύων και Συστημάτων, των Κατανεμημένων και των Υπολογιστικών Συστημάτων, καθώς και της Επιχειρησιακής Αναλυτικής και των Αναδυόμενων Τεχνολογιών και Υπηρεσιών Πληροφορίας.</p>
    <p>Σκοπός του ΠΜΣ είναι η επιστημονική και τεχνολογική κατάρτιση αποφοίτων τμημάτων ΑΕΙ Πληροφορικής, Τηλεπικοινωνιών και συναφών επιστημών, σε πεδία της Πληροφορικής που επιδεικνύουν ραγδαία επιστημονική ανάπτυξη, υψηλή δυναμική και διαρκώς αυξανόμενη ζήτηση στην Ευρωπαϊκή και παγκόσμια αγορά εργασίας όπως είναι τα αντικείμενα που αναφέρθηκαν παραπάνω, με σκοπό την εκπαίδευση καταρτισμένων και ικανών επιστημόνων και ερευνητών που θα προωθήσουν την ανάπτυξη της χώρας και των Ελληνικών επιχειρήσεων στο πλαίσιο της Κοινωνίας της Πληροφορίας.</p>
    <p>Το ΠΜΣ απονέμει Δίπλωμα Μεταπτυχιακών Σπουδών (ΔΜΣ) σε «Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας» (Distributed Systems, Security and Emerging Information Technologies) με τις εξής ειδικεύσεις:</p>
    <ul>
        <li>
            Διάχυτα Υπολογιστικά Συστήματα και Αρχιτεκτονικές - Pervasive Computing Systems and Architectures.
        </li>
        <li>
            Τεχνολογίες και Διαχείριση Ασφάλειας Υπολογιστικών Συστημάτων - Computing Systems Security Management and Engineering.
        </li>
        <li>
            Επιχειρηματική Αναλυτική και Αναδυόμενες Τεχνολογίες Πληροφορίας - Business Analytics and Emerging Information Technologies.
        </li>
    </ul>
    <br>
    <ul>
        <li style="color: black"><a style="color: black" href="prokirixi-pms-psp.pdf">Προκήρυξη</a></li>
        <li style="color: black"><a style="color: black" href="aitisi-pms-psp.doc">Έντυπο</a></li>
    </ul>
    <br>
    <h3>Προσωπικό</h3>
    <br>
    <table class="demo">
        <caption>Διδάσκοντες</caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Βαθμίδα</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>&nbsp;<a style="font-size:11px; box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Αναγνωστόπουλος Χρήστος-Νικόλαος</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής<br style="font-size:11px; box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πανεπιστημίου Αιγαίου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:canag@unipi.gr" style="font-size:11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">canag@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="font-size:11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βέργαδος Δημήτριος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142119</i></td>
            <td>&nbsp;<a href="mailto:vergados@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">vergados@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βίρβου Μαρία</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγήτρια</td>
            <td style="font-size:11px;">&nbsp;507/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142269</td>
            <td>&nbsp;<a href="mailto:mvirvou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">mvirvou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Δουληγέρης Χρήστος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;302/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142137<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142472</i></td>
            <td>&nbsp;<a href="mailto:cdoulig@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">cdoulig@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μιχάλας Άγγελος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;208/ΚΕKΤ</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td>&nbsp;<a href="mailto:amichalas@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">amichalas@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Παναγιωτόπουλος Θεμιστοκλής</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;541/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142276</td>
            <td>&nbsp;<a href="mailto:themisp@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">themisp@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Τσιχριντζής Γεώργιος</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;506/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142322</td>
            <td>&nbsp;<a href="mailto:geoatsi@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">geoatsi@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Αναγνωστόπουλος Ιωάννης</a></td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πανεπιστημίου Θεσσαλίας</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:janag@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">janag@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Διάλλα Άντα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Αναπληρώτρια Καθηγήτρια Ευρωπαϊκής Ιστορίας στο Τμήμα Θεωρίας και Ιστορίας της Τέχνης της Ανώτατης Σχολής Καλών Τεχνών</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142124</td>
            <td>&nbsp;<a href="mailto:konstant@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">konstant@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Φιλιππάκης Μιχαήλ</td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;504/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142566</td>
            <td>&nbsp;<a href="mailto:mfilip@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">mfilip@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αλέπης Ευθύμιος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;540/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142311</td>
            <td>&nbsp;<a href="mailto:talepis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">talepis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Δημήτριος Ι. Βέργαδος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/ted-dep-all/item/4784" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πατσάκης Κωνσταντίνος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;540/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142261</td>
            <td>&nbsp;<a href="mailto:kpatsak@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">kpatsak@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πικράκης Άγγελος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;505/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142128</td>
            <td>&nbsp;<a href="mailto:pikrakis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pikrakis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Σακκόπουλος Ευάγγελος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;543/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142312</td>
            <td>&nbsp;<a href="mailto:sakkopul@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">sakkopul@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Σωτηρόπουλος Διονύσιος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;543/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142314</td>
            <td>&nbsp;<a href="mailto:dsotirop@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">dsotirop@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Τασούλας Ιωάννης</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;542/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142313</td>
            <td>&nbsp;<a href="mailto:jtas@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">jtas@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Ψυχογιός Δημήτριος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;319/Δεληγιώργη 107</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142399</td>
            <td>&nbsp;<a href="mailto:dpsycho@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">dpsycho@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Στεφάνου Ιωσήφ</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Ομότιμος Καθηγητής της Σχολής Αρχιτεκτόνων του Εθνικού Μετσοβίου Πολυτεχνείου,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτονας πολεοδόμος,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Ινστούτου Σύρου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:jstefanou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">jstefanou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Fran Casino</td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ανδρουλιδάκη Αμαλία</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτων Μηχανικός, Γενική Διευθύντρια Αναστήλωσης, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Βαγενά Ευαγγελία</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">IT &amp; IP Law Expert and lecturer, CIPP/E, vice president of HADPP</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:evagena@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">evagena@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Βασιλαρά Αρχοντούλα</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:avasilara@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">avasilara@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Γρηγορακάκης Γρήγορης</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Προϊστάμενος της Εφορείας Αρχαιοτήτων Κεφαλληνίας του ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">104/ΓΛ126</span><br></td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;Θωμάς Δασακλής</td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κακαβάς Γεώργιος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Διευθυντής του Νομισματικού Μουσείου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κακουλίδου Αλίκη</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκoυσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Γραφίστας</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:akakoulidou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">akakoulidou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Καραμητσάνης Βασίλειος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Animasyros και της ΑΣΙΦΑ ΕΛΛΑΣ,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Δ.Σ. της Εθνικής Λυρικής Σκηνής</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κοτσώνης Ιωάννης</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Συνθέτης ηλεκτρονικής μουσικής, sound artist και αυτοσχεδιαστής</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:ykotsonis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">ykotsonis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Λινάκη Ε.</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μαγγίνης Γεώργιος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μέλος της Τριμελούς Εκτελεστικής Επιτροπής του Μουσείου Μπενάκη</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μυριδάκης Νικόλαος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Οικονόμου Αγησίλαος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:aecon@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">aecon@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Πάνος Παντελής</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Γενικός Διευθυντής της Αμερικανικής Σχολής Κλασικών Σπουδών στην Αθήνα (ΑΣΚΣΑ)</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Παπαπαναγιώτου Σταύρος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ράππας Παναγιώτης</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Σκηνοθέτης, Animator, Illustrator</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ραζής Γεράσιμος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:makisraz@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">makisraz@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ρωμάνου Χριστίνα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχαιολόγος, Τμήμα Διαχείρισης Εθνικού Αρχείου Μνημείων και Αρχαιολογικού Κτηματολογίου, Διεύθυνση Διαχείρισης Εθνικού Αρχείου Μνημείων, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Σιούντρη Κωνσταντίνα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτων Μηχανικός Ε.Μ.Π.</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:ksiountri@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">ksiountri@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Σκόνδρας Εμμανουήλ</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μεταδιδακτορικός Ερευνητής</span></td>
            <td style="font-size:11px;">&nbsp;208/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142458,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142127,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142060</span></td>
            <td>&nbsp;<a href="mailto:skondras@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">skondras@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Στεφάνου Βασιλεία</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td style="font-size:11px;">&nbsp;<a href="mailto:vstefanou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">vstefanou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Συρρής Νικόλαος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μηχανικός Πληροφορικής, Τμήμα Διαχείρισης Εθνικού Αρχείου Μνημείων και Αρχαιολογικού Κτηματολογίου, Διεύθυνση Διαχείρισης Εθνικού Αρχείου Μνημείων, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Χατζηγρηγορίου Παύλος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:pchatzigrigoriou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pchatzigrigoriou@unipi.gr</a></td>
        </tr>
        <tbody>
    </table><br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 700; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Διοικητικό Προσωπικό</span><br></caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;Κανατούλα Αικατερίνη</td>
            <td style="font-size: 12px;">&nbsp;<span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">503/ΚΕΚΤ</span>ς</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142105<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142264</i></td>
            <td>&nbsp;<a href="mailto:psp@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">psp@unipi.gr</a></td>
        </tr>
        <tr>
            <td style="font-size: 12px;">&nbsp;Καλογεράκη Ελένη - Μαρία</td>
            <td style="font-size: 12px;">&nbsp;503/ΚΕΚΤ</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142263</td>
            <td><br></td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 700; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τεχνικό Προσωπικό</span><br></caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τίτλος</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;Σκόνδρας Εμμανουήλ</td>
            <td style="font-size: 12px;">&nbsp;Μεταδιδακτορικός Ερευνητής</td>
            <td style="font-size: 12px;">&nbsp;208/ΚΕΚΤ</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142458,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142127</span></td>
            <td>&nbsp;<a href="mailto:skondras@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">skondras@unipi.gr</a></td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="color: rgb(255, 255, 255); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 700; text-align: start; background-color: rgb(27, 28, 29);">Υπόμνημα</span><br></caption>
        <thead>
        <tr>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Ακρωνύμιο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Επεξήγηση</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;ΓΛ126</td>
            <td style="font-size: 12px;">&nbsp;Γρηγορίου Λαμπράκη 126, Πειραιάς, 18534, Ελλάδα</td>
        </tr>
        <tr>
            <td style="font-size: 12px;">&nbsp;ΚΕKΤ</td>
            <td style="font-size: 12px;">&nbsp;Κεντρικό Κτήριο, Καραολή &amp; Δημητρίου 80, Πειραιάς, 18534, Ελλάδα</td>
        </tr>
        <tbody>
    </table>
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

</script>
</body>
</html>