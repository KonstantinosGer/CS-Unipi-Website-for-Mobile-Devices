<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες</title>
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


        h2 {
            font-family: inherit;
            color: #3b5998;
            text-align: center;
        }

        #table1 {
            margin-left: -15px;
        }

        #table1 p {
            border-bottom: 1px solid #ddd;
            padding-bottom: 2em;
        }

        #table1 b {
            color: #3b5998;
        }

        #table1 td {
            font-size: 14px;
            font-family: inherit;
            text-align: center;
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

        /********************/
        /* ΠΙΝΑΚΕΣ ΜΑΘΗΜΑΤΩΝ */
        /********************/
        .demo {
            width:100%;
            height:150px;
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:5px;
            margin-left: -15px;
        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:5px;
            background:#1A8FC1;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:5px;
            background:#FFFFFF;
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
    <h2>Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες</h2>

    <iframe width="100%" height="315" src="https://www.youtube.com/watch?v=-osbr-URiAc&feature=emb_title" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="text-align: center; margin-left: -5px"></iframe>

    <br>

    <table id="table1" align="center" border="0" style="width: 100%;">
        <tr>
            <td class="td-title">
                <b>Ειδίκευση / Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies»</b><br>

                <p>Η Ειδίκευση / Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» στοχεύει να εκπαιδεύσει και να καταρτίσει επιστήμονες από διαφορετικά πεδία ώστε να μπορούν να εργαστούν στο νέο ψηφιακό αστικό τοπίο, καθώς και να σχεδιάσουν και να υποστηρίξουν νέες υπηρεσίες στις διαρκώς μεταβαλλόμενες «Έξυπνες Πόλεις», που συνδέονται με το σύγχρονο οικοσύστημα, υποδομές, λειτουργίες και υπηρεσίες, όπως οι έξυπνες μεταφορές, επικοινωνίες, έξυπνα σπίτια, ηλεκτρονική διακυβέρνηση, smart grids, έξυπνη πολιτιστική κληρονομιά, έξυπνη υγεία, έξυπνη γεωργία, έξυπνη ψηφιακή υποδομή, έξυπνη διαχείριση ενέργειας. Στοχεύει επίσης στην παροχή τεχνογνωσίας για τη διαχείριση πολύπλοκων αστικών ζητημάτων, να παράσχει τα κατάλληλα εφόδια για την ανάπτυξη καινοτόμων συστημάτων διακυβέρνησης μιας ασφαλούς και βιώσιμης πόλης, στον σχεδιασμό και υποστήριξη λειτουργικών και αποτελεσματικών μεθόδων εξοικονόμησης πόρων, καθώς και στην έξυπνη διαχείριση καταστροφών.</p><br>

                <b>Σε ποιους απευθύνεται η κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies»</b><br>
                <p>Στην κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies»γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017, ενδεικτικά και ανάλογα με την ειδίκευση: Τμημάτων/Σχολών Τεχνολογιών Πληροφορικής και Επικοινωνιών, Μηχανικών, Αρχιτεκτόνων Μηχανικών, Πολεοδόμων, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Παιδαγωγικών, Γεωπονικών Επιστημών, Ναυτιλίας και Βιομηχανίας, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Μηχανικών Περιβάλλοντος, Μηχανικών Πληροφορικής Τ.Ε., Φυσικών, Μαθηματικών, Χημικών, Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολιτικών Μηχανικών, Μηχανικών Παραγωγής και Διοίκησης, Ανθρωπιστικών Επιστημών, Οικονομικών και Κοινωνικών Επιστημών, Οικονομικών - Επιχειρηματικών και Διεθνών Σπουδών, Κοινωνικών Επιστημών, Νομικών Επιστημών, Τμημάτων Πληροφορικής, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Γεωλογίας και Γεωπεριβάλλοντος, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών, Επικοινωνίας Μέσων και Πολιτισμού, Ψηφιακών Μέσων, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Επικοινωνίας και Πολιτισμικής Διαχείρισης, Γραφιστικής, Πληροφορικής και Μέσων Μαζικής Ενημέρωσης, Διοίκησης - Οικονομίας και Επικοινωνίας, Πολιτιστικών και Τουριστικών Μονάδων, Aρχειονομίας, Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Φιλοσοφικής Σχολής, Παιδαγωγικών Τμημάτων, Υδάτινου Περιβάλλοντος, Πολιτικής Επιστήμης και Δημόσιας Διοίκησης, Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης, Επικοινωνίας Μέσων και Πολιτισμού, Δημόσιας Διοίκησης, Οικονομικής και Περιφερειακής Ανάπτυξης, Bιβλιοθη,κονομίας και Μουσειολογίας, Μηχανικών Ορυκτών Πόρων ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων), καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p><br>

                <b>Μεταπτυχιακοί Τίτλοι</b><br>
                <p>Το ΠΜΣ απονέμει το Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» («Digital Culture, Smart Cities, IoT and Advanced Digital Technologies»)</p><br>

                <b>Πρόγραμμα Μαθημάτων</b><br>
                <p>Η έναρξη των μαθημάτων θα πραγματοποιηθεί εντός Οκτωβρίου 2019. Οι ώρες διδασκαλίας είναι από 18:00 έως 21:00, τέσσερις ημέρες την εβδομάδα.</p><br>

                <b>Αιτήσεις</b><br>
                <p>Οι ενδιαφερόμενοι μπορούν να υποβάλουν αιτήσεις έως και 16 Οκτωβρίου 2020, ηλεκτρονικά στον διαδικτυακό τόπο http://www.cs.unipi.gr/registration/dicul.php και να αποστείλλουν την αίτηση τους και τα σχετικά δικαιολογητικά στη Γραμματεία του Προγράμματος Μεταπτυχιακών Σπουδών (Π.Μ.Σ.).<br>
                    Περισσότερες Πληροφορίες μπορείτε να βρείτε: https://www.facebook.com/dcsciot, http://www.cs.unipi.gr/dcsciot, Email: dcsciot@unipi.gr</p><br>

            </td>
        </tr>
    </table>

    <h2 style="margin-left: -15px;">Μαθήματα κατεύθυνσης</h2>

    <!--******************-->
    <!-- ΠΙΝΑΚΕΣ ΜΑΘΗΜΑΤΩΝ -->
    <!--******************-->

    <h3 style="margin-left: -15px;">1ο εξάμηνο</h3>

    <table class="demo">
        <thead>
        <tr>
            <th>Τίτλος</th>
            <th>Διδάσκων</th>
            <th>ECTS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Υπολογιστική Νέφους, Δίκτυα Παροχής Περιεχομένου και Οχηματικές Τεχνολογίες</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Χ. Δουληγέρης</a><br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Ανάλυση Δεδομένων και Στατιστική</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/el/jtas.html" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Επ. Καθηγητής Ι. Τασούλας</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">M2M Επικοινωνίες</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Γ. Τσιχριντζής</a><br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Αειφόρος πολιτιστική ανάπτυξη για ψηφιακές πόλεις</span><br></td>
            <td>Ομ. Καθ. Ι. Στεφάνου</td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Πνευματική Ιδιοκτησία, Προσωπικά Δεδομένα και Ρυθμιστικά Θέματα</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a></td>
            <td>&nbsp;6</td>
        </tr>
        <tbody>
    </table>
    <br><br>


    <h3 style="margin-left: -15px;">2ο εξάμηνο</h3>

    <table class="demo">
        <thead>
        <tr>
            <th>Τίτλος</th>
            <th>Διδάσκων</th>
            <th>ECTS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Διακυβέρνηση της Πληροφορίας και Συμμόρφωση / Επιχειρηματικότητα - Διοίκηση Έξυπνων Πόλεων</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2126" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Αν. Καθ. Δ. Αποστόλου</a><br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Αλγοριθμικά Θέματα Aστικών Mεταφορών</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Επ. Καθ. Χ. Κωνσταντόπουλος</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Ενεργειακή Διαχείριση, Έξυπνα Δίκτυα και Έξυπνη Γεωργία</span><br></td>
            <td>Καθ. Α. Μιχάλας<br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Αστικός Σχεδιασμός Ψηφιακών Πόλεων</span><br></td>
            <td>Ομ. Καθ. Ι. Στεφάνου</td>
            <td>&nbsp;6</td>
        </tr>
        <tr>
            <td><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px; font-weight: 700;">Λογισμικό για Έξυπνες Πόλεις</span><br></td>
            <td><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Μ. Βίρβου</a><br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Καθ. Δ. Βέργαδος</a><br><a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-size: 14px;">Επ. Καθ. Ε. Αλέπης</a><br></td>
            <td>&nbsp;6</td>
        </tr>
        <tbody>
    </table>
    <br><br>
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