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

        .link
        {
            text-underline: none;
            color: black;
            text-decoration: none;
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
    <h2 style="margin-left: 5px">Μεταπτυχιακά</h2>
    <table id ="table1" align="center" border="0" style="width: 100%;">
        <tr>
            <td><button id="button_genikes_plhrofories" onclick="Function_genikes_plhrofories()" style="background-color: #b3ccff; width:97%; height:56px; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Γενικές Πληροφορίες</button></td>
            <td><button id="button_akadimaiko_gignesthai" style="background-color: #b3ccff; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;"><a class="link" href="msc.ppt">Ακαδημαικό Γίγνεσθαι</a></button></td>
            <td><button id="button_axiologish_pms" onclick="Function_axiologish_pms()" style="background-color: #b3ccff; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Αξιολόγηση ΠΜΣ</button></td>
        </tr>
        <tr>
            <td><button id="button_paroxes_pros_tous_foithtes" onclick="Function_paroxes_pros_tous_foithtes()" style="background-color: #b3ccff; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Παροχές προς τους φοιτητές</button></td>
            <td><button id="button_ypodomh_ereunas" onclick="Function_ypodomh_ereunas()" style="background-color: #b3ccff; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Υποδομή Έρευνας</button></td>
            <td><button id="button_agora_ergasias" onclick="Function_agora_ergasias()" style="background-color: #b3ccff; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;">Αγορά εργασίας</button></td>
        </tr>
    </table>
    <br>
    <table id ="table2" align="center" border="0" style="width: 100%;">
        <tr>
            <td><button id="pms_id_1" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;"><a class="link" href="Metaptuxiaka_id_1.php">ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης"</a></button></td>
            <td><button id="pms_id_2" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;"><a class="link" href="Metaptuxiaka_id_2.php">ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες"</a></button></td>
        </tr>
        <tr>
            <td><button id="pms_id_3" style="background-color: firebrick; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;"><a class="link" href="Metaptuxiaka_id_3.php">ΠΜΣ "Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας"</a></button></td>
            <td><button id="pms_id_4" style="background-color: firebrick; width:97%; height:94px; padding: 9px 6px; font-size: 16px; cursor: pointer; display: inline-block;  margin-left: 5px;"><a class="link" href="Metaptuxiaka_id_4.php">ΠΜΣ Πληροφορική</a></button></td>
        </tr>
    </table>
    <div id="genikes_plhrofories" style="display: none;">
        <br>
        <h2>Γενικές Πληροφορίες – Προγράμματα Μεταπτυχιακών Σπουδών</h2>
        <p>Το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς, οργανώνει και λειτουργεί τέσσερα μεταπτυχιακά προγράμματα σπουδών:</p>
        <p><b>- ΠΜΣ «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης».</b></p>
        <p><b>- ΠΜΣ «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες».</b></p>
        <p><b>- ΠΜΣ «Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας».</b></p>
        <p><b>- ΠΜΣ «Πληροφορική».</b></p><br>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) έχει ως αντικείμενο τη συντονισμένη ανάπτυξη και οργάνωση των ερευνητικών κατευθύνσεων της επιστήμης της Πληροφορικής και των νέων Τεχνολογιών και ειδικότερα αυτών που αφορούν σε τομείς υψηλής προτεραιότητας για τη χώρα μας.</p>
        <p>Το «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) θεραπεύει αμιγώς τα πλέον προηγμένα ζητήματα επιστήμης στο χώρο της Πληροφορικής και των νέων τεχνολογιών. Το περιεχόμενο και η φυσιογνωμία του προγράμματος έχει διαμορφωθεί έτσι ώστε να ανταποκρίνεται με επιτυχία στις ιδιαίτερες επιστημονικές ανάγκες που προκαλεί η ταχύτατη εξέλιξη της Πληροφορικής και νέων Τεχνολογιών σε ευρωπαϊκό και διεθνές επίπεδο.</p>
        <p>Τόσο τα υποχρεωτικά μαθήματα, όσο και τα μαθήματα επιλογής, έχουν επιλεγεί ώστε να προσφέρουν στο μεταπτυχιακό φοιτητή την ειδίκευση που απαιτούν οι πλέον πρόσφατες τεχνολογικές εξελίξεις στον τομέα της Πληροφορικής και νέων τεχνολογιών, σε συνδυασμό με τα ιδιαίτερα χαρακτηριστικά και τις ανάγκες της σύγχρονης Ελληνικής και Ευρωπαϊκής Οικονομίας.</p>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» («Digital Culture, Smart Cities, IoT and Advanced Digital Technologies») έχει ως αντικείμενο την συντονισμένη ανάπτυξη και οργάνωση των ερευνητικών κατευθύνσεων της επιστήμης των νέων Τεχνολογιών και ειδικότερα αυτών που αφορούν σε τομείς υψηλής προτεραιότητας για τη χώρα μας, όπως είναι ο Ψηφιακός Πολιτισμός, οι Έξυπνες Πόλεις, το Διαδίκτυο των Πραγμάτων (IoT), καθώς και οι Σύγχρονες Επικοινωνίες και Ψηφιακές Τεχνολογίες.</p>
        <p>Το ΠΜΣ απονέμει Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» με τις εξής τρεις (3) ειδικεύσεις (tracks) : «Ψηφιακός Πολιτισμός», «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες», «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες». Το Π.Μ.Σ. απευθύνεται σε αποφοίτους από διαφορετικά επιστημονικά πεδία.</p>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών (ΠΜΣ) «Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας» (Distributed Systems, Security and Emerging Information Technologies), έχει ως αντικείμενο την εκπαίδευση νέων επιστημόνων στις επιστημονικές περιοχές της Ασφάλειας Δικτύων και Συστημάτων, των Κατανεμημένων και των Υπολογιστικών Συστημάτων, καθώς και της Επιχειρησιακής Αναλυτικής και των Αναδυόμενων Τεχνολογιών και Υπηρεσιών Πληροφορίας.</p>
        <p>Σκοπός του ΠΜΣ είναι η επιστημονική και τεχνολογική κατάρτιση αποφοίτων τμημάτων ΑΕΙ Πληροφορικής, Τηλεπικοινωνιών και συναφών επιστημών, σε πεδία της Πληροφορικής που επιδεικνύουν ραγδαία επιστημονική ανάπτυξη, υψηλή δυναμική και διαρκώς αυξανόμενη ζήτηση στην Ευρωπαϊκή και παγκόσμια αγορά εργασίας όπως είναι τα αντικείμενα που αναφέρθηκαν παραπάνω, με σκοπό την εκπαίδευση καταρτισμένων και ικανών επιστημόνων και ερευνητών που θα προωθήσουν την ανάπτυξη της χώρας και των Ελληνικών επιχειρήσεων στο πλαίσιο της Κοινωνίας της Πληροφορίας.</p>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών στην «Πληροφορική» (Informatics) έχει ως αντικείμενο την άρτια και υψηλού επιπέδου εκπαίδευση αποφοίτων τμημάτων ΑΕΙ και ΑΤΕΙ διαφόρων επιστημονικών ειδικοτήτων στις αρχές και μεθοδολογίες εφαρμογής της σύγχρονης επιστήμης της Πληροφορικής.</p>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών στην «Πληροφορική» θεραπεύει σύγχρονα ζητήματα τεχνολογίας και εφαρμογών της επιστήμης της Πληροφορικής σε άλλες σύγχρονες επιστήμες. Το περιεχόμενο και η φυσιογνωμία του προγράμματος έχει διαμορφωθεί έτσι ώστε να ανταποκρίνεται με επιτυχία στις ιδιαίτερες επιστημονικές ανάγκες που προκαλεί η ταχύτατη εξέλιξη της Πληροφορικής και των εφαρμογών της σε ευρωπαϊκό και διεθνές επίπεδο.</p>
    </div>
    <div id="axiologish_pms" style="display: none;">
        <br>
        <h2>Αξιολόγηση Μεταπτυχιακών</h2>
        <p><b>ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ</b></p>
        <p><b>Α.ΔΙ.Π.</b></p>
        <p><b>ΑΡΧΗ ΔΙΑΣΦΑΛΙΣΗΣ ΠΟΙΟΤΗΤΑΣ ΑΝΩΤΑΤΗΣ ΕΚΠΑΙΔΕΥΣΗΣ</b></p>
        <p><b>Πρωτότυπο Κείμενο:</b></p>
        <p>Two postgraduate (M.Sc.) programs are offered by the Department, one in Advanced Computing and Information Systems and a second, a Conversion Course, in Informatics. Both programs are in harmony with the general educational aims of the Department (the continuous updating of program content according to international trends in general, and in a way that reflects the needs of industry and employers in particular). The first program offers a truly advanced level of knowledge and specialization in Computing and Information Systems, which is often required by certain parts of the R&D-related industry and other employers. The second M.Sc. program makes accessible the area of Informatics to individuals from other science/technology-based backgrounds. Both programs have been designed to reflect the research expertise of the staff in the Department and are also feeders to Ph.D. and other research projects supported by the Department. The vast majority of course material is appropriate and of high quality. The curriculum of the two M.Sc. programs is defined and the results show that excellent work is performed. The academic staff works closely on the two programs and offers a competitive course structure.</p>
        <p>The depth and spread of Ph.D. activity was found to be impressive. The approach of having M.Sc. courses as a source of students entering Ph.D. programs works very well.</p><br>
        <p><b>Κείμενο σε μετάφραση:</b></p>
        <p>Το Τμήμα Πληροφορικής προσφέρει δύο προγράμματα μεταπτυχιακών σπουδών (Π.Μ.Σ.), το ένα στα «Προηγμένα Συστήματα Πληροφορικής» και το άλλο στην «Πληροφορική». Τα δύο αυτά προγράμματα προσφέρουν υψηλής ποιότητας εκπαίδευση σύμφωνα με τις διεθνείς επιστημονικές και ερευνητικές τάσεις και αντικατοπτρίζουν τις ανάγκες της αγοράς εργασίας. Συγκεκριμένα, το Π.Μ.Σ. «Προηγμένα Συστήματα Πληροφορικής» προσφέρει ένα πραγματικά προχωρημένο επίπεδο γνώσεων και εξειδίκευσης στην πληροφορική και τα πληροφοριακά συστήματα, που είναι άκρως απαραίτητα για την ανεύρεση εργασίας. Το Π.Μ.Σ. «Πληροφορική»  προετοιμάζει και εκπαιδεύει καταρτισμένους και ικανούς επιστήμονες και ερευνητές στον τομέα της Πληροφορικής, οι οποίοι όμως προέρχονται από διαφορετικές επιστήμες. Και τα δύο προαναφερθέντα Π.Μ.Σ.  έχουν σχεδιαστεί με τρόπο ώστε να αντανακλούν την ερευνητική εμπειρία και τεχνογνωσία  του Τμήματος και προετοιμάζουν το έδαφος για διδακτορικές σπουδές και ερευνητικά προγράμματα, υποστηριζόμενα από το Τμήμα. Το υλικό των μαθημάτων των Π.Μ.Σ. είναι υψηλής ποιότητας και κατάλληλα ορισμένο για την εκπαιδευτική διαδικασία. Τα αποτελέσματα αποδεικνύουν την εξαιρετική δουλειά που γίνεται στα μαθήματα των Π.Μ.Σ.. Το Διδακτικό και Ερευνητικό Προσωπικό δουλεύει προσεκτικά στα δύο προγράμματα και προσφέρει μια ανταγωνιστική δομή μαθημάτων. </p>
        <p>Το βάθος και το επίπεδο της έρευνας που προσφέρουν οι σπουδές διδακτορικού επιπέδου στο Τμήμα διαπιστώθηκε ότι είναι εντυπωσιακά. Η προσέγγιση της ύπαρξης Π.Μ.Σ. που προετοιμάζουν εξαιρετικά τους φοιτητές για διδακτορικές σπουδές έχει αποφέρει πολύ σημαντική πρόοδο.</p><br>
        <p><b>Η ΕΠΙΤΡΟΠΗ ΕΞΩΤΕΡΙΚΗΣ ΑΞΙΟΛΟΓΗΣΗΣ</b></p><br>
        <a href="http://web.cs.ucla.edu/~dt/">Dr. Demetri Terzopoulos (Chair), University of California, Los Angeles, USA</a><br>
        <a href="http://ctr-emth.teikav.edu.gr/index.php/contact-form/2011-01-17-14-06-30/2011-01-17-13-26-44/37-2011-01-17-13-22-45/1-name">Dr. Dimitrios Karampatzakis, Expert, Greece </a><br>
        <a href="http://cvn.ecp.fr/personnel/nikos/">Dr. Nikos Paragios, Ecole Centrale de Paris, France</a><br>
        <a href="http://www.research.lancs.ac.uk/portal/en/people/Costas-Xydeas/">Dr. Costas Xydeas, University of Lancaster, UK</a>
    </div>
    <div id="paroxes_pros_tous_foithtes" style="display: none;">
        <br>
        <h2>Facilities for students</h2>
        <p>Στους φοιτητές όλων των Προγραμμάτων Μεταπτυχιακών Σπουδών του Τμήματος παρέχονται:</p><br>
        <p>1.Δωρεάν συμμετοχή σε διεθνή επιστημονικά συνέδρια</p>
        <p>2.Εκπαιδευτικές εκδρομές</p>
        <p>3.Πρόσβαση στα εργαστήρια του Τμήματος</p>
        <p>4.WiFi στις αίθουσες διδασκαλίας</p>
        <p>5.Πρόσβαση στις <a href="http://www.cs.unipi.gr/index.php?option=com_k2&view=itemlist&layout=category&task=category&id=38&Itemid=567&lang=el">υπηρεσίες του Τμήματος και του Πανεπιστημίου</a></p>
        <p>6.Πρόσβαση σε <a href="http://www.cs.unipi.gr/index.php?option=com_k2&view=itemlist&layout=category&task=category&id=41&Itemid=781&lang=el">υπηρεσίες από συνεργαζόμενες εταιρίες</a></p>
    </div>
    <div id="ypodomh_ereunas" style="display: none;">
        <br>
        <h2>Υποδομή έρευνας</h2>
        <p>Στο Τμήμα διενεργείται ερευνητικό έργο - στο οποίο οι φοιτητές ενθαρρύνονται να συμμετέχουν - σε μία πληθώρα τομέων. Για περισσότερες πληροφορίες, οι φοιτητές μπορούν να απευθύνονται στα <a href="http://www.cs.unipi.gr/index.php?option=com_k2&view=item&layout=item&id=160&Itemid=700&lang=el">ερευνητικά εργαστήρια του Τμήματος.</a></p>
    </div>
    <div id="agora_ergasias" style="display: none;">
        <br>
        <h2>Αγορά εργασίας</h2><br>
        <a href="success_stories.ppt">Ενδεικτικές ιστορίες επιτυχίας αποφοίτων</a><br><br>
        <a href="https://career.unipi.gr/">Γραφείο Διασύνδεσης</a><br><br>
        <p>Δημοσιεύσεις στον τύπο:</p>
        <p>1.Καλές θέσεις εργασίας με «πληροφορική» από Πειραιά</p>
        <p>2.«Οι σπουδές πληροφορικής δίνουν λύση στην κρίση εργασίας»</p>
        <p>3.Μεταπτυχιακά πληροφορικής</p>
        <p>4.Συνέντευξη με τους  Καθηγητές του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς, κ. Μαρία Βίρβου και κ. Γεώργιο Τσιχριντζή.</p>
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

    //
    //ΓΕΝΙΚΕΣ ΠΛΗΡΟΦΟΡΙΕΣ
    //
    function Function_genikes_plhrofories() {
        var a = document.getElementById("genikes_plhrofories");
        var b = document.getElementById("axiologish_pms");
        var c = document.getElementById("paroxes_pros_tous_foithtes");
        var d = document.getElementById("ypodomh_ereunas");
        var e = document.getElementById("agora_ergasias");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            document.getElementById("button_axiologish_pms").style.background = '#b3ccff';
            document.getElementById("button_paroxes_pros_tous_foithtes").style.background = '#b3ccff';
            document.getElementById("button_ypodomh_ereunas").style.background = '#b3ccff';
            document.getElementById("button_agora_ergasias").style.background = '#b3ccff';
        }
        a.style.display = "block";
        document.getElementById("button_genikes_plhrofories").style.background = '#eee';
    }
    //
    //ΑΞΙΟΛΟΓΗΣΗ ΠΜΣ
    //
    function Function_axiologish_pms() {
        var a = document.getElementById("genikes_plhrofories");
        var b = document.getElementById("axiologish_pms");
        var c = document.getElementById("paroxes_pros_tous_foithtes");
        var d = document.getElementById("ypodomh_ereunas");
        var e = document.getElementById("agora_ergasias");
        if (a.style.display === "block" || c.style.display === "block" || d.style.display === "block" || e.style.display === "block") {
            a.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            document.getElementById("button_genikes_plhrofories").style.background = '#b3ccff';
            document.getElementById("button_paroxes_pros_tous_foithtes").style.background = '#b3ccff';
            document.getElementById("button_ypodomh_ereunas").style.background = '#b3ccff';
            document.getElementById("button_agora_ergasias").style.background = '#b3ccff';
        }
        b.style.display = "block";
        document.getElementById("button_axiologish_pms").style.background = '#eee';
    }
    //
    //ΠΑΡΟΧΕΣ ΠΡΟΣ ΤΟΥΣ ΦΟΙΤΗΤΕΣ
    //
    function Function_paroxes_pros_tous_foithtes() {
        var a = document.getElementById("genikes_plhrofories");
        var b = document.getElementById("axiologish_pms");
        var c = document.getElementById("paroxes_pros_tous_foithtes");
        var d = document.getElementById("ypodomh_ereunas");
        var e = document.getElementById("agora_ergasias");
        if (b.style.display === "block" || a.style.display === "block" || d.style.display === "block" || e.style.display === "block") {
            b.style.display = "none";
            a.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            document.getElementById("button_genikes_plhrofories").style.background = '#b3ccff';
            document.getElementById("button_axiologish_pms").style.background = '#b3ccff';
            document.getElementById("button_ypodomh_ereunas").style.background = '#b3ccff';
            document.getElementById("button_agora_ergasias").style.background = '#b3ccff';
        }
        c.style.display = "block";
        document.getElementById("button_paroxes_pros_tous_foithtes").style.background = '#eee';
    }
    //
    //ΥΠΟΔΟΜΗ ΕΡΕΥΝΑΣ
    //
    function Function_ypodomh_ereunas() {
        var a = document.getElementById("genikes_plhrofories");
        var b = document.getElementById("axiologish_pms");
        var c = document.getElementById("paroxes_pros_tous_foithtes");
        var d = document.getElementById("ypodomh_ereunas");
        var e = document.getElementById("agora_ergasias");
        if (b.style.display === "block" || c.style.display === "block" || a.style.display === "block" || e.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            a.style.display = "none";
            e.style.display = "none";
            document.getElementById("button_genikes_plhrofories").style.background = '#b3ccff';
            document.getElementById("button_axiologish_pms").style.background = '#b3ccff';
            document.getElementById("button_paroxes_pros_tous_foithtes").style.background = '#b3ccff';
            document.getElementById("button_agora_ergasias").style.background = '#b3ccff';
        }
        d.style.display = "block";
        document.getElementById("button_ypodomh_ereunas").style.background = '#eee';
    }
    //
    //ΑΓΟΡΑ ΕΡΓΑΣΙΑΣ
    //
    function Function_agora_ergasias() {
        var a = document.getElementById("genikes_plhrofories");
        var b = document.getElementById("axiologish_pms");
        var c = document.getElementById("paroxes_pros_tous_foithtes");
        var d = document.getElementById("ypodomh_ereunas");
        var e = document.getElementById("agora_ergasias");
        if (b.style.display === "block" || c.style.display === "block" || d.style.display === "block" || a.style.display === "block") {
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            a.style.display = "none";
            document.getElementById("button_genikes_plhrofories").style.background = '#b3ccff';
            document.getElementById("button_axiologish_pms").style.background = '#b3ccff';
            document.getElementById("button_paroxes_pros_tous_foithtes").style.background = '#b3ccff';
            document.getElementById("button_ypodomh_ereunas").style.background = '#b3ccff';
        }
        e.style.display = "block";
        document.getElementById("button_agora_ergasias").style.background = '#eee';
    }

</script>
</body>
</html>