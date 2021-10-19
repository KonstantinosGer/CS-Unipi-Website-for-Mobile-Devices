<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Προπτυχιακά</title>
    <link rel="stylesheet" href="style.css">


    <style>
        #main{
            margin-left: -20px;
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
        .btn {
            border: none;
            background-color: #3b5998;
            padding: 10px 5px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
            margin-left: 10px;
        }

        #button_Synoptikh_Parousiash{background-color: #eee;}

        .demo {
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:1px;

        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:1px;
            background:#F0F0F0;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:1px;
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
    <button id="button_Synoptikh_Parousiash" onclick="Function1()" class="btn success">Συνοπτική Παρουσίαση</button>
    <button id="button_Domh_Programmatos" onclick="Function2()" class="btn info">Δομή Προγράμματος</button>
    <button id="button_Mathimata" onclick="Function3()" class="btn warning">Μαθήματα</button>
    <div id="Synoptikh_Parousiash" style="padding-left:16px; margin-left:-5px; display: block;">
        <h2>Προπτυχιακό Πρόγραμμα Σπουδών</h2>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/SEVEaV3ptIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="text-align: center; margin-left: -5px"></iframe>
        <p>Το νέο Πρόγραμμα Σπουδών του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς φιλοδοξεί να εκπληρώσει στο μέγιστο δυνατό βαθμό τους εξής στόχους:</p>
        <ul>
            <li>Ευθυγράμμιση με τους τρέχοντες προσανατολισμούς που ορίζονται διεθνώς στον τομέα της Πληροφορικής και τις ανάγκες της αγοράς εργασίας,</li>
            <li>Προσδιορισμό της ιδιαίτερης ταυτότητας του Τμήματος με την καθιέρωση κατευθύνσεων που θα θεραπεύουν επαρκώς, για προπτυχιακό επίπεδο, τομείς-αιχμής της Πληροφορικής,</li>
            <li>Δημιουργία «φυτώριου» νέων επιστημόνων με την ενσωμάτωση σύγχρονων γνωστικών αντικειμένων και μαθημάτων σε συνδυασμό και με τα ήδη δρομολογημένα Προγράμματα Μεταπτυχιακών Σπουδών του Τμήματος.</li>
        </ul>
        <p>Για την εκπλήρωση των παραπάνω στόχων στο νέο Πρόγραμμα Σπουδών εισάγονται στα δύο τελευταία έτη σπουδών τρεις κατευθύνσεις,</p>
        <ul>
            <li>Τεχνολογία Λογισμικού και Ευφυή Συστήματα</li>
            <li>Διαδικτυακά και Υπολογιστικά Συστήματα</li>
            <li>Πληροφοριακά Συστήματα και Υπηρεσίες</li>
        </ul>
        <p>οι οποίες θα παρέχουν την απαραίτητη και κρίσιμη, για προπτυχιακό επίπεδο, εξειδίκευση που θα καθιστά τους φοιτητές του Τμήματος ανταγωνιστικούς στην αγορά εργασίας και έτοιμους να αντεπεξέλθουν στις σύγχρονες απαιτήσεις στον επιστημονικό στίβο της Πληροφορικής.</p>
    </div>
    <div id="Domh_Programmatos" style="display: none;">
        <h2>Δομή Προγράμματος</h2>
        <p>Τα πρώτα τέσσερα (4) εξάμηνα (1ο και 2ο έτος) είναι κοινά για όλους τους φοιτητές του Τμήματος. Στα τέσσερα (4) τελευταία εξάμηνα (3ο και 4ο έτος) καθιερώνονται τρεις κατευθύνσεις:</p>
        <h3>Τεχνολογία Λογισμικού και Ευφυή Συστήματα (ΤΛΕΣ):</h3><p>Η ταχύτατη εξέλιξη των υπολογιστών που σηματοδοτείται από αυξημένη υπολογιστική ισχύ, αυξημένη χωρητικότητα μνήμης και εξειδικευμένων περιφερειακών συσκευών, έχει επιτρέψει την διάδοση προηγμένων και απαιτητικών προγραμματιστικών τεχνικών ακόμα και σε επίπεδο προσωπικού υπολογιστή. Οι τεχνικές αυτές θεραπεύονται από τα επιστημονικά πεδία της Τεχνολογίας Λογισμικού, των Γραφικών και της Εικονικής Πραγματικότητας, της Τεχνητής Νοημοσύνης και των Ευφυών Συστημάτων, της Αναγνώρισης Προτύπου καθώς και από τις πλέον προηγμένες τεχνικές Επικοινωνίας Ανθρώπου Υπολογιστή. Η κατεύθυνση αυτή φιλοδοξεί να προσφέρει στους προπτυχιακούς φοιτητές αφ’ ενός το απαραίτητο υπόβαθρο, αφ’ ετέρου τις ιδιαίτερες εκείνες γνώσεις ώστε να μπορούν να ανταποκριθούν αναπτυξιακά και ερευνητικά στην ευρύτερη περιοχή των μοντέρνων και προηγμένων τεχνικών ανάπτυξης λογισμικού.</p>
        <h3>Διαδικτυακά και Υπολογιστικά Συστήματα (ΔΥΣ):</h3><p>Η σύγκλιση των τεχνολογιών πληροφορικής και τηλεπικοινωνιών, η εκρηκτική ανάπτυξη του Διαδικτύου και οι εκθετικές αλλαγές στην πολυπλοκότητα και στις ταχύτητες των συστημάτων που υποστηρίζουν τις παραπάνω τεχνολογίες, απαιτεί την απόκτηση εξειδικευμένων γνώσεων στους επιστημονικούς τομείς των διαδικτυακών ή δικτυοκεντρικών συστημάτων και των υπολογιστικών συστημάτων που είναι απαραίτητα για την εξάπλωση των τεχνολογιών αυτών. Το πρόγραμμα σπουδών στην κατεύθυνση αυτή παρέχει τη δυνατότητα στους φοιτητές να αποκτήσουν κατ' αρχήν το απαραίτητο υπόβαθρο για την κατανόηση, λειτουργία και χρήση των τεχνολογιών αυτών και ύστερα να εφοδιαστούν με τις απαραίτητες δεξιότητες για την ανάπτυξη, συντήρηση και αριστοποίηση συστημάτων που λειτουργούν σε ένα δικτυακό περιβάλλον.</p>
        <h3>Πληροφοριακά Συστήματα και Υπηρεσίες (ΠΣΥ):</h3><p>Η ανάπτυξη, υλοποίηση και διαχείριση σύγχρονων πληροφοριακών συστημάτων απαιτεί ένα ευρύ φάσμα γνώσεων που αναφέρονται στις τεχνολογίες πληροφορικής και επικοινωνιών, και στη διοίκηση επιχειρήσεων, ώστε τα πληροφοριακά συστήματα να είναι αποδεκτά από τους χρήστες και να ενσωματώνονται επιτυχώς στη λειτουργία των επιχειρήσεων. Σκοπός της κατεύθυνσης αυτής είναι η παροχή προς τους φοιτητές του Τμήματος των αναγκαίων γνώσεων, σε θεωρητικό και πρακτικό επίπεδο, σχετικά με τις μεθοδολογίες και τεχνολογίες ανάπτυξης σύγχρονων πληροφοριακών συστημάτων, τις διαδικασίες διοίκησης έργων που αφορούν στην ανάπτυξη πληροφοριακών συστημάτων, και τις μεθόδους διοίκησης εγκατεστημένων πληροφοριακών συστημάτων. Ενδεικτικά, δίνεται ιδιαίτερη έμφαση σε θέματα μεθοδολογιών ανάλυσης και σχεδιασμού συστημάτων, σχεδίασης και ανάπτυξης αποδοτικών βάσεων δεδομένων, δικτύων υπολογιστών, ανάπτυξης πληροφοριακών συστημάτων με βάση τις επιχειρησιακές διαδικασίες, συστημάτων ροής εργασίας και ασφάλειας πληροφοριών.</p>
        <p>Η δομή του Προγράμματος Σπουδών απεικονίζεται στον πίνακα που ακολουθεί.</p>
        <img src="pinakas1b.PNG" alt="pinakas1b" style="width: 100%"><br><br>
        <img src="pinakas2b.PNG" alt="pinakas2b" style="width: 100%"><br><br>
        <img src="pinakas3b.PNG" alt="pinakas3b" style="width: 100%">
        <p>Στο 5ο και το 6ο εξάμηνο όλες οι κατευθύνσεις έχουν δύο (2) κοινά μαθήματα (μαθήματα κορμού), από τρία υποχρεωτικά μαθήματα κατεύθυνσης και ένα μάθημα επιλογής. Σε κάθε κατεύθυνση, η επιλογή μπορεί να γίνεται από ένα κατάλογο μαθημάτων επιλογής που προσφέρονται στο αντίστοιχο εξάμηνο ή από τα υποχρεωτικά μαθήματα άλλης κατεύθυνσης.</p>
        <p>Στο 7ο και 8ο εξάμηνο εκτείνεται η πτυχιακή εργασία, η οποία ισοδυναμεί με 2 μαθήματα ανά εξάμηνο (τέσσερα μαθήματα συνολικά). Κάθε κατεύθυνση έχει τρία (3) υποχρεωτικά μαθήματα της κατεύθυνσης και δύο (2) μαθήματα επιλογής. Σε κάθε κατεύθυνση, η επιλογή μπορεί να γίνεται από ένα κατάλογο μαθημάτων επιλογής που προσφέρονται στο αντίστοιχο εξάμηνο ή από τα υποχρεωτικά μαθήματα άλλης κατεύθυνσης.</p>
    </div>
    <div id="Mathimata" style="display: none;">
        <br>
        <h2>Αναλυτικό Πρόγραμμα</h2>
        <p>(Υ: Υποχρεωτικό, Ξ.Γ.: Ξένη Γλώσσα, Ε: Επιλογής, Κ: Κορμού, Υ(Κ): Υποχρεωτικό Κατεύθυνσης)</p>
        <table id ="table" align="center" border="0" style="width: 100%; margin-left: 10px;">
            <tr>
                <td><button id="examino1" onclick="Function_examino1()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 1ου εξαμήνου</button></td>
                <td><button id="examino2" onclick="Function_examino2()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 2ου εξαμήνου</button></td>
            </tr>
            <tr>
                <td><button id="examino3" onclick="Function_examino3()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 3ου εξαμήνου</button></td>
                <td><button id="examino4" onclick="Function_examino4()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 4ου εξαμήνου</button></td>
            </tr>
            <tr>
                <td><button id="examino5" onclick="Function_examino5()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 5ου εξαμήνου</button></td>
                <td><button id="examino6" onclick="Function_examino6()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 6ου εξαμήνου</button></td>
            </tr>
            <tr>
                <td><button id="examino7" onclick="Function_examino7()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 7ου εξαμήνου</button></td>
                <td><button id="examino8" onclick="Function_examino8()" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Μαθήματα 8ου εξαμήνου</button></td>
            </tr>
        </table>
        <div id="array1" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 1</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Λογική Σχεδίαση Ψηφιακών Συστημάτων</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2199" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ψαράκης Μιχαήλ</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Ανάλυση Ι</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΦΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2103" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Σαπουνάκης Αριστείδης</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Αρχές Προγραμματισμού</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2126" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αποστόλου Δημήτριος</a><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Τεχνολογίες Διαδικτύου</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δουληγέρης Χρήστος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Εισαγωγή στην Επιστήμη των Υπολογιστών</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Παναγιωτόπουλος Θεμιστοκλής</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Μαθηματικά των Υπολογιστών</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΦΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2103" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Σαπουνάκης Αριστείδης</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2225" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσικούρας Παναγιώτης-Γεώργιος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά Ι</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά Ι</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array2" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 2</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ανάλυση ΙΙ</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2103" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Σαπουνάκης Αριστείδης</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Διακριτά Μαθηματικά</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+1ΦΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2103" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Σαπουνάκης Αριστείδης</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2225" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσικούρας Παναγιώτης-Γεώργιος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Δομές Δεδομένων</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κωνσταντόπουλος Χαράλαμπος</a><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Αντικειμενοστραφής Προγραμματισμός</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2128" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δεσπότης Δημήτριος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αλέπης Ευθύμιος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">Αρχιτεκτονική Υπολογιστών<br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2199" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ψαράκης Μιχαήλ</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Εφαρμοσμένη Άλγεβρα</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+1ΦΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2225" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσικούρας Παναγιώτης-Γεώργιος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά ΙΙ</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά ΙΙ</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array3" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 3</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Μαθηματικός Προγραμματισμός</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΦΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2128" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δεσπότης Δημήτριος</a><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Αντικειμενοστραφής Ανάπτυξη Εφαρμογών</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2128" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δεσπότης Δημήτριος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αλέπης Ευθύμιος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Λειτουργικά Συστήματα</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2229" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κοτζανικολάου Παναγιώτης</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Μεταγλωττιστές</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Πιθανότητες και Στατιστική</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Γεωργιακώδης Φώτιος</td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Εφαρμογές Θεωρίας Γραφημάτων</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2225" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσικούρας Παναγιώτης-Γεώργιος</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Μάνατζμεντ</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Φ. Νταλιάνης</td>
                </tr>
                <tr>
                    <td>&nbsp;Εργονομία</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Λ. Λάιος</span><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Διοίκηση Συστημάτων Εφοδιασμού</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Σ. Μοσχούρης</td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Δίκαιο της Πληροφορικής</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Α. Σινανιώτη</td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά ΙΙΙ</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά ΙΙΙ</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array4" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 4</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Δίκτυα Υπολογιστών</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+1ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δουληγέρης Χρήστος</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Αλγόριθμοι</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Βάσεις Δεδομένων</td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Θεοδωρίδης Ιωάννης</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Προγραμματισμός στο Διαδίκτυο και τον Παγκόσμιο Ιστό</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2229" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κοτζανικολάου Παναγιώτης</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Αρχές και Εφαρμογές Σημάτων και Συστημάτων</span><br></td>
                    <td>&nbsp;Υ</td>
                    <td>&nbsp;4+1ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δουληγέρης Χρήστος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Θεωρία Πληροφοριών και Κωδίκων</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2135" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πολέμη Δέσποινα</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2229" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κοτζανικολάου Παναγιώτης</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Επιχειρησιακή Στρατηγική</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Ι. Πολλάλης</td>
                </tr>
                <tr>
                    <td>&nbsp;Ξενόγλωσση Ορολογία της Πληροφορικής</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Χ. Τόμπρου</span><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Δυναμικά Συστήματα</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Ν. Μιχελακάκης</td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά ΙV</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Χ. Τόμπρου</span><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά ΙV</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array5" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 5</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Αλληλεπίδραση Ανθρώπου και Υπολογιστή</span><br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βίρβου Μαρία</a><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Πληροφοριακά Συστήματα</td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2181" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Μεταξιώτης Κωνσταντίνος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Αναγνώριση Προτύπων</span><br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Επιστημονική Συγγραφή</span><br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Προηγμένη Αρχιτεκτονική Υπολογιστών</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2199" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ψαράκης Μιχαήλ</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Προηγμένα Θέματα Επικοινωνιών</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βέργαδος Δημήτριος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ανάλυση Δεδομένων</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΠΣΥ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Γεωργιακώδης Φώτιος</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ι. Σίσκος</span><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Συστήματα Διαχείρισης Βάσεων Δεδομένων</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ(ΠΣΥ,ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Θεοδωρίδης Ιωάννης</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Λογικός Προγραμματισμός</span></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2126" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αποστόλου Δημήτριος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Κρυπτογραφία</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2135" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πολέμη Δέσποινα</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Συστήματα Ροής Εργασιών</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4+1ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2107" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ασημακόπουλος Νικήτας</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Ειδικά Θέματα Επιχειρησιακής Έρευνας</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Ι. Σίσκος</td>
                </tr>
                <tr>
                    <td>&nbsp;Θεωρία Υπολογισμού</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά V</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά V</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array6" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 6</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τεχνολογία Λογισμικού</span><br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βίρβου Μαρία</a><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Τεχνητή Νοημοσύνη και Έμπειρα Συστήματα</td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2126" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αποστόλου Δημήτριος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Σχεδίαση Υπολογιστικών Συστημάτων</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΔΥΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2199" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ψαράκης Μιχαήλ</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Δίκτυα Υψηλών Ταχυτήτων</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βέργαδος Δημήτριος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ουρές Αναμονής</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;Γεωργιακώδης Φώτιος</td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Συστημική Ανάλυση</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΠΣΥ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2107" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ασημακόπουλος Νικήτας</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Συστήματα Υποστήριξης Αποφάσεων</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΠΣΥ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ι. Σίσκος</span><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Διοίκηση Ασφάλειας Συστημάτων</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΠΣΥ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2135" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πολέμη Δέσποινα</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Συστήματα Πολυμέσων</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Γραφικά με Υπολογιστές</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4+2ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Παναγιωτόπουλος Θεμιστοκλής</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Βιοπληροφορική</span><br></td>
                    <td>&nbsp;ΥΚ (ΤΛΕΣ)</td>
                    <td>&nbsp;4+1ΕΡ</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Συστήματα Υποστήριξης Ομάδων</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2128" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δεσπότης Δημήτριος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2126" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αποστόλου Δημήτριος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Προγραμματισμός Συστημάτων, Τηλεπικοινωνίων και Υπηρεσιών</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βέργαδος Δημήτριος</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά VI</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά VI</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array7" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 7</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Πτυχιακή Α</span><br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Κατανεμημένα και Πολυεπεξεργαστικά Υπολογιστικά Συστήματα</td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δουληγέρης Χρήστος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2199" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ψαράκης Μιχαήλ</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Κινητές και Ασύρματες Επικοινωνίες</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΔΥΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βέργαδος Δημήτριος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ασφάλεια Πληροφοριακών Συστημάτων</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ,ΠΣΥ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2135" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πολέμη Δέσποινα</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2229" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κοτζανικολάου Παναγιώτης</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Αποθήκες Δεδομένων και Εξόρυξη Γνώσης</span><br></td>
                    <td>&nbsp;ΥΚ (ΠΣΥ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Θεοδωρίδης Ιωάννης</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ν. Πελέκης</span><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Προσομοίωση Συστημάτων</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΠΣΥ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2107" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ασημακόπουλος Νικήτας</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Εικονική Πραγματικότητα</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Παναγιωτόπουλος Θεμιστοκλής</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Ανάλυση Εικόνας</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Τσιχριντζής Γεώργιος</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Σύγχρονα Θέματα Τεχνολογίας Λογισμικού</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βίρβου Μαρία</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αλέπης Ευθύμιος</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Πρακτική Άσκηση</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Υ</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><p align="center" style="box-sizing: inherit; margin: 0px 0px 15px; padding: 0px; border: 0px; line-height: 1.4285em; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Θ. Παναγιωτόπουλος,</p><p align="center" style="box-sizing: inherit; margin: 15px 0px 0px; padding: 0px; border: 0px; line-height: 1.4285em; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γ. Τσιχριντζής</p></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Διαχείριση Γνώσης</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2181" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Μεταξιώτης Κωνσταντίνος</a></td>
                </tr>
                <tr>
                    <td style="font-size: 12px;">&nbsp;Ανάκτηση Πληροφορίας και Αναζήτηση στον Παγκόσμιο Ιστό</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Πληροφοριακά Συστήματα στη Ναυτιλία</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Θεοδωρίδης Ιωάννης</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ε. Τζαννάτος</span><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά VII</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά VII</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
        <div id="array8" style="display: none;">
            <br><br>
            <table class="demo">
                <caption><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">Μαθήματα 8</span><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(204, 0, 0); font-size: 9.9px; font-weight: 700; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; text-align: start;">ου</span><span style="color: rgba(0, 0, 0, 0.4); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; font-weight: 700; text-align: start;">&nbsp;εξαμήνου</span><br></caption>
                <thead>
                <tr>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Τίτλος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Κατηγορία Μαθήματος</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Ώρες Διδασκαλίας</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Πιστωτικές Μονάδες</span><br></th>
                    <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; background-color: rgb(249, 250, 251);">Διδάσκοντες</span><br></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Πτυχιακή</span>&nbsp;Β<br></td>
                    <td>&nbsp;Υ(Κ)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;5</td>
                    <td><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Ασφάλεια Δικτύων</td>
                    <td>&nbsp;ΥΚ (ΔΥΣ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2229" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Κοτζανικολάου Παναγιώτης</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ηλεκτρονικό Επιχειρείν και Καινοτομία</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΔΥΣ,ΠΣΥ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2135" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πολέμη Δέσποινα</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Πληροφοριακά Συστήματα στο Διαδίκτυο</span><br></td>
                    <td>&nbsp;ΥΚ (ΔΥΣ,ΠΣΥ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Δουληγέρης Χρήστος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Διοικητική Πληροφορική</span><br></td>
                    <td>&nbsp;ΥΚ (ΠΣΥ)</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2181" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Μεταξιώτης Κωνσταντίνος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Εκπαιδευτικό Λογισμικό</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βίρβου Μαρία</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Αλέπης Ευθύμιος</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Επεξεργασία Σημάτων Φωνής</span><br></td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Πικράκης Άγγελος</a><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Κατανεμημένη Τεχνητή Νοημοσύνη</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">ΥΚ (ΤΛΕΣ)</span><br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Παναγιωτόπουλος Θεμιστοκλής</a><br></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Υπολογιστική Στατιστική</span><br></td>
                    <td>Ε<br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Γεωργιακώδης Φώτιος</span><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Πρακτική Άσκηση</td>
                    <td>Ε<br></td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><p align="center" style="box-sizing: inherit; margin: 0px 0px 15px; padding: 0px; border: 0px; line-height: 1.4285em; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;"><span style="font-size: 13.2px;">Γ. Τσιχριντζής</span><br></p></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γεωγραφικά Πληροφοριακά Συστήματα</span></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Θεοδωρίδης Ιωάννης</a><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ν. Πελέκης</span></td>
                </tr>
                <tr>
                    <td>&nbsp;Συστήματα ERP/CRM</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2181" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Μεταξιώτης Κωνσταντίνος</a></td>
                </tr>
                <tr>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Συστήματα Διασφάλισης Ποιότητας</span><br></td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ι. Σίσκος</span><br></td>
                </tr>
                <tr>
                    <td>&nbsp;Εικονικές Επιχειρήσεις</td>
                    <td>&nbsp;Ε</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;5</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2107" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Ασημακόπουλος Νικήτας</a></td>
                </tr>
                <tr>
                    <td>&nbsp;Αγγλικά VIII</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;Χ. Τόμπρου</td>
                </tr>
                <tr>
                    <td>&nbsp;Γαλλικά VIII</td>
                    <td>&nbsp;Ξ.Γ.</td>
                    <td>&nbsp;4</td>
                    <td>&nbsp;--</td>
                    <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2109" target="_blank" style="box-sizing: inherit; text-decoration-line: underline; color: rgb(25, 83, 131); margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: -webkit-center;">Βουγιουκλίδου Άννα</a></td>
                </tr>
                <tbody>
            </table>
        </div>
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
    //ΣΥΝΟΠΤΙΚΗ ΠΑΡΟΥΣΙΑΣΗ
    //
    function Function1(){
        var x = document.getElementById("Synoptikh_Parousiash");
        var y = document.getElementById("Domh_Programmatos");
        var z = document.getElementById("Mathimata");
        //var button_x = document.getElementById("button_Synoptikh_Parousiash");
        //var button_y = document.getElementById("button_Domh_Programmatos");
        //var button_z = document.getElementById("button_Mathimata");
        if (y.style.display === "block" || z.style.display === "block") {
            y.style.display = "none";
            z.style.display = "none";
            document.getElementById("button_Domh_Programmatos").style.background='#3b5998';
            document.getElementById("button_Mathimata").style.background='#3b5998';
        }
        x.style.display = "block";
        document.getElementById("button_Synoptikh_Parousiash").style.background='#eee';



    }
    //
    //ΔΟΜΗ ΠΡΟΓΡΑΜΜΑΤΟΣ
    //
    function Function2(){
        var x = document.getElementById("Synoptikh_Parousiash");
        var y = document.getElementById("Domh_Programmatos");
        var z = document.getElementById("Mathimata");
        if (x.style.display === "block" || z.style.display === "block") {
            x.style.display = "none";
            z.style.display = "none";
            document.getElementById("button_Synoptikh_Parousiash").style.background='#3b5998';
            document.getElementById("button_Mathimata").style.background='#3b5998';
        }
        y.style.display = "block";
        document.getElementById("button_Domh_Programmatos").style.background='#eee';
    }
    //
    //ΜΑΘΗΜΑΤΑ
    //
    function Function3(){
        var x = document.getElementById("Synoptikh_Parousiash");
        var y = document.getElementById("Domh_Programmatos");
        var z = document.getElementById("Mathimata");
        if (x.style.display === "block" || y.style.display === "block") {
            x.style.display = "none";
            y.style.display = "none";
            document.getElementById("button_Synoptikh_Parousiash").style.background='#3b5998';
            document.getElementById("button_Domh_Programmatos").style.background='#3b5998';
        }
        z.style.display = "block";
        document.getElementById("button_Mathimata").style.background='#eee';
    }
    //
    //ΕΞΑΜΗΝΟ 1
    //
    function Function_examino1() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block" || f.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        a.style.display = "block";
        document.getElementById("examino1").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 2
    //
    function Function_examino2() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (a.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block" || f.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            a.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        b.style.display = "block";
        document.getElementById("examino2").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 3
    //
    function Function_examino3() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || a.style.display === "block" || d.style.display === "block" || e.style.display === "block" || f.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            a.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        c.style.display = "block";
        document.getElementById("examino3").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 4
    //
    function Function_examino4() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || a.style.display === "block" || e.style.display === "block" || f.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            a.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        d.style.display = "block";
        document.getElementById("examino4").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 5
    //
    function Function_examino5() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || a.style.display === "block" || f.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            a.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        e.style.display = "block";
        document.getElementById("examino5").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 6
    //
    function Function_examino6() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block" || a.style.display === "block" || g.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            a.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        f.style.display = "block";
        document.getElementById("examino6").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 7
    //
    function Function_examino7() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block" || f.style.display === "block" || a.style.display === "block" || h.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            a.style.display = "none";
            h.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
            document.getElementById("examino8").style.background = 'firebrick';
        }
        g.style.display = "block";
        document.getElementById("examino7").style.background = '#3b5998';
    }
    //
    //ΕΞΑΜΗΝΟ 8
    //
    function Function_examino8() {
        var a = document.getElementById("array1");
        var b = document.getElementById("array2");
        var c = document.getElementById("array3");
        var d = document.getElementById("array4");
        var e = document.getElementById("array5");
        var f = document.getElementById("array6");
        var g = document.getElementById("array7");
        var h = document.getElementById("array8");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block" || f.style.display === "block" || g.style.display === "block" || a.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            a.style.display = "none";
            document.getElementById("examino2").style.background = 'firebrick';
            document.getElementById("examino3").style.background = 'firebrick';
            document.getElementById("examino4").style.background = 'firebrick';
            document.getElementById("examino5").style.background = 'firebrick';
            document.getElementById("examino6").style.background = 'firebrick';
            document.getElementById("examino7").style.background = 'firebrick';
            document.getElementById("examino1").style.background = 'firebrick';
        }
        h.style.display = "block";
        document.getElementById("examino8").style.background = '#3b5998';
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