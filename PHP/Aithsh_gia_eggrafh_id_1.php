<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Αίτηση για εγγραφή</title>
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
    <h2>Πρόσκληση Υποβολής Αιτήσεων
        ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης", 2020-2021</h2>
    <br>
    <div class="type-1">
        <div>
            <a href="http://www.cs.unipi.gr/registration/aics-sdai.php" class="btn btn-1">
                <span class="txt">Ηλεκτρονική Υποβολή Αίτησης</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
        </div>
    </div>
    <br>
    <p style="text-align-all: center">ΠΑΝΕΠΙΣΤΗΜΙΟ ΠΕΙΡΑΙΩΣ</p>
    <p style="text-align-all: center">ΣΧΟΛΗ ΤΕΧΝΟΛΟΓΙΩΝ ΠΛΗΡΟΦΟΡΙΚΗΣ ΚΑΙ ΕΠΙΚΟΙΝΩΝΙΩΝ</p>
    <p style="text-align-all: center">ΤΜΗΜΑ ΠΛΗΡΟΦΟΡΙΚΗΣ</p>
    <p style="text-align-all: center">ΠΡΟΓΡΑΜΜΑΤΑ ΜΕΤΑΠΤΥΧΙΑΚΩΝ ΣΠΟΥΔΩΝ</p>
    <br>
    <p style="text-align-all: center">ΠΡΟΣΚΛΗΣΗ ΥΠΟΒΟΛΗΣ ΑΙΤΗΣΕΩΝ</p>
    <ul>
        <li style="color: black"><a style="color: black" href="prokirixi-pms-psp.pdf">Πρόσκληση υποβολής αιτήσεων για το ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης", 2020-2021</a></li>
        <li style="color: black"><a style="color: black" href="aitisi-pms-psp.doc">Έντυπο αίτησης για το ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης", 2020-2021</a></li>
    </ul>
    <p>Το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς προσκαλεί υποψηφίους μεταπτυχιακούς φοιτητές για υποβολή αιτήσεων με σκοπό τη συμμετοχή στα Προγράμματα Μεταπτυχιακών Σπουδών (ΠΜΣ): <u>«Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης (ΠΡΟΑΛΤΕΝ)» που διοργανώνει για τον ακαδημαϊκό κύκλο 2020-2021.</u></p>
    <p style="text-align-all: center"><b>ΣΥΜΦΩΝΑ ΜΕ ΟΔΗΓΙΕΣ ΤΟΥ ΥΠΟΥΡΓΕΙΟΥ ΠΑΙΔΕΙΑΣ, Η ΔΙΔΑΣΚΑΛΙΑ ΤΩΝ ΜΑΘΗΜΑΤΩΝ ΘΑ ΠΑΡΕΧΕΤΑΙ ΚΑΙ ΔΙΑΔΙΚΤΥΑΚΑ ΜΕ ΧΡΗΣΗ ΣΥΓΧΡΟΝΗΣ ΠΛΑΤΦΟΡΜΑΣ ΤΗΛΕΚΠΑΙΔΕΥΣΗΣ ΔΙΑΘΕΣΙΜΗΣ ΑΠΟ ΤΗΝ ΥΠΟΔΟΜΗ ΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ ΠΕΙΡΑΙΩΣ ΚΑΙ ΤΟΥ ΤΜΗΜΑΤΟΣ ΠΛΗΡΟΦΟΡΙΚΗΣ.</b></p>
    <p>Το ΠΜΣ «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (“Advanced Informatics and Computing Systems - Software Development and Artificial Intelligence”) έχει διάρκεια τριών (3) ακαδημαϊκών εξαμήνων (δυο (2) ακαδημαϊκών εξαμήνων παρακολούθησης μεταπτυχιακών μαθημάτων και ενός (1) ακαδημαϊκού εξαμήνου εκπόνησης μεταπτυχιακής διατριβής) και απονέμει Μεταπτυχιακό Δίπλωμα Ειδίκευσης (ΜΔΕ) στα «Προηγμένα Συστήματα Πληροφορικής» στις εξής κατευθύνσεις:</p>
    <p>α) Ευφυείς Τεχνολογίες Επικοινωνίας Ανθρώπου-Υπολογιστή/Intelligent Technologies for Human – Computer Interaction (ΕΤΕΑΥ/ITHCI),</p>
    <p>β) Προηγμένες Τεχνολογίες Ανάπτυξης Λογισμικού/Advanced Software Development Technologies (ΠΡΟΤΑΛ/ASDT),</p>
    <p>γ) Τεχνολογίες Ηλεκτρονικών και Κινητών Υπηρεσιών/e-Service and m-Service Technologies (ΤΗΚΥ/eSmST).</p>
    <p>Στο Π.Μ.Σ. (M.Sc.) γίνονται δεκτοί, σύμφωνα με τις διατάξεις του άρθρου 34 του Ν.4485/2017, μετά από επιλογή, κατά προτεραιότητα πτυχιούχοι Τμημάτων Πληροφορικής, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Πολυτεχνείων ή Πολυτεχνικών Σχολών, Τμημάτων Θετικών Επιστημών Πανεπιστημίων, Μηχανικών Πληροφορικής Τ.Ε., Μηχανικών Τ.Ε., Σχολών Θετικών ή Τεχνολογικών Επιστημών, Τμημάτων Ψηφιακών Μέσων, Επικοινωνίας και Πολιτισμικής Διαχείρισης ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων, καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής. Η έναρξη των μαθημάτων θα πραγματοποιηθεί εντός Οκτωβρίου 2020.</p>
    <p>Οι ενδιαφερόμενοι μπορούν να υποβάλουν αιτήσεις <b>από 19 Μαρτίου 2020 έως και 30 Σεπτεμβρίου 2020</b>. Οι υποψήφιοι πρέπει να υποβάλουν ηλεκτρονικά την αίτηση στον διαδικτυακό τόπο: http://www.cs.unipi.gr/registration/aics-sdai.php και να αποστείλουν την αίτηση και τα κάτωθι δικαιολογητικά αναγράφοντας το Ονοματεπώνυμό τους στο e-mail psp@unipi.gr. Οι αιτήσεις γίνονται δεκτές και ταχυδρομικώς εφόσον αποσταλούν προς το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς, μέχρι την καταληκτική ημερομηνία.</p>
    <p>Τα σχετικά έγγραφα είναι τα ακόλουθα:</p>
    <p>• Συμπληρωμένη αίτηση εγγραφής στο Π.Μ.Σ. Το έντυπο της αίτησης παρέχεται από τη Γραμματεία του Τμήματος Πληροφορικής και τους δικτυακούς τόπους του Τμήματος: http://www.cs.unipi.gr/  (ανακοίνωση «Πρόσκληση Υποβολής Αιτήσεων»)</p>
    <p>• Αντίγραφο πτυχίου ελληνικού ΑΕΙ ή ΑΤΕΙ (νόμιμα επικυρωμένου), ή αντίγραφο πτυχίου ανώτατου ιδρύματος της αλλοδαπής αναγνωρισμένο από το ΔΟΑΤΑΠ (πρώην ΔΙΚΑΤΣΑ).</p>
    <p>• Πιστοποιητικό αναλυτικής βαθμολογίας προπτυχιακών μαθημάτων στην οποία να αναγράφεται και ο βαθμός του πτυχίου, ή να προκύπτει  η βαθμολογία του υποψηφίου μέχρι την ημέρα της αίτησης.</p>
    <p>• Πιστοποιητικά γνώσης της Αγγλικής γλώσσας ή/και άλλων γλωσσών εάν υπάρχουν. Σε περίπτωση μη προσκόμισης από υποψήφιο πιστοποιητικού γνώσης Αγγλικής, η Επιτροπή Επιλογής θα αξιολογήσει το επίπεδο γνώσης Αγγλικής του υποψηφίου.</p>
    <p>• Πλήρες βιογραφικό σημείωμα.</p>
    <p>• Αντίγραφα από τυχόν άλλα πτυχία ΑΕΙ ή ΑΤΕΙ ή αντίστοιχου ιδρύματος της αλλοδαπής, αναγνωρισμένα από το ΔΟΑΤΑΠ. (πρώην ΔΙΚΑΤΣΑ).</p>
    <p>• Ανάτυπα δημοσιεύσεων σε επιστημονικά περιοδικά, συνέδρια ή ανάτυπα άλλου συγγραφικού έργου.</p>
    <p>• Πιστοποιητικά προϋπηρεσίας και επαγγελματικού έργου.</p>
    <p>• Κάθε άλλο πιστοποιητικό για έργο ή δραστηριότητα που μπορεί να βοηθήσει στην επιλογή του υποψηφίου.</p>
    <p>• Φωτοτυπία της αστυνομικής ταυτότητας ή του διαβατηρίου.</p>
    <p>• Μία πρόσφατη φωτογραφία, η οποία επισυνάπτεται στην αίτηση του υποψηφίου.</p>
    <p>• Δύο Συστατικές Επιστολές.</p><br>
    <p>Τα δίδακτρα του Π.Μ.Σ. ανέρχονται στο ποσό των 1.500 €/εξάμηνο και προκαταβάλλονται σε λογαριασμό του Κέντρου Ερευνών του Πανεπιστημίου Πειραιώς. Με βάση το νόμο ένα ποσοστό φοιτητών έχουν δικαίωμα για απαλλαγή διδάκτρων, εφόσον πληρούν τα οικονομικά κριτήρια που θέτει ο νόμος.</p>
    <p><u>Περισσότερες πληροφορίες μπορείτε να αναζητήσετε στην ηλεκτρονική διεύθυνση του Μεταπτυχιακού "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης": <a style="color: black" href=" http://www.cs.unipi.gr/aics-sdai">http://www.cs.unipi.gr/aics-sdai</a></u></p>
    <p>Η συμπληρωμένη αίτηση με τα σχετικά δικαιολογητικά υποβάλλονται σε έντυπη μορφή καθημερινά, Δευτέρα, Τρίτη, Πέμπτη από 09:00 έως 17:00 και Τετάρτη από 09:00 έως 20:00 Παρασκευή από 09:00 έως 14:00, στην παρακάτω διεύθυνση.</p>
    <p><u>Κριτήρια επιλογής για την αξιολόγηση και κατάταξη υποψηφίων του ΠΜΣ«Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης»</u></p>
    <p>Η επιλογή των εισακτέων πραγματοποιείται από Επιτροπή μελών ΔΕΠ (Επιτροπή Επιλογής), που συγκροτείται με απόφαση της Συνέλευσης. Τα κριτήρια επιλογής καθώς και οι λεπτομέρειες εφαρμογής των κριτηρίων αυτών (όπως μόρια, συντελεστές) γίνονται γνωστά στους υποψηφίους με την προκήρυξη του ΠΜΣ και είναι τα ακόλουθα:</p>
    <p>1. Βαθμός πτυχίου (30%)</p>
    <p>2. Συνάφεια του Τμήματος προέλευσης με το ΠΜΣ (30%)</p>
    <p>3. Είδος και εύρος εργασιακής ή/και ερευνητικής εμπειρίας (5%)</p>
    <p>4. Συστατικές επιστολές από μέλη ∆ΕΠ ΑΕΙ ή / και από εργοδότη (3%)</p>
    <p>5. Γνώση Αγγλικής γλώσσας (2%)</p>
    <p>6. Συνέντευξη (30%)</p><br>
    <p><b>Διεύθυνση Π.Μ.Σ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης":</b></p>
    <p>Τμήμα Πληροφορικής</p>
    <p>Πανεπιστήμιο Πειραιώς</p>
    <p>Καραολή και Δημητρίου 80 , Πειραιάς 18534</p>
    <p>5ος όροφος Γραφείο 503</p>
    <p>Τηλ 210 – 4142105, 210 - 4142263</p>
    <p>Φαξ  210- 414 2264</p>
    <p>Email: psp@unipi.gr</a></p>
    <p>https://www.facebook.com/MSCAICS</a></p>
    <p>https://www.facebook.com/profile.php?id=100019262267362</p>
    <p>https://www.linkedin.com/in/προηγμένα-συστήματα-πληροφορικής-a2b25b147</p>
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