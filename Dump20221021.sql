CREATE DATABASE  IF NOT EXISTS `posts` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `posts`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: posts
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `inMenu` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (69,'ABOUT','A <b>simple</b> content management system with functionality for adding new articles and updating articles for the admin and viewing articles for the regular user.',NULL,'2022-10-14 23:37:03','1'),(87,'Valdantieji Kubiliaus taupymo politiką atmena su kartėliu: net pensijas nuėmėme, ir ką tai davė?','Žvelgdami į praeitį, kai kurie valdančiųjų atstovai kritikuoja buvusio premjero Andriaus Kubiliaus vykdytą \r\ntaupymo politiką per 2008–2009 metų ekonominę krizę. Gerai, pasak jų, kad dabar planuojama eiti kitu – \r\n„pinigų įliejimo“ į ekonomiką – keliu. Kita vertus, Seimo politikai turi pastabų ar pasiūlymų kitų metų \r\nbiudžetui, pavyzdžiui, dėl 21 proc. PVM tarifo, kuris turėjo būti laikinas.\r\n\r\nSeimo Liberalų sąjūdžio frakcijos seniūnas Eugenijus Gentvilas anksčiau Delfi teigė, jog biudžetą, „kur \r\nvaldžia prisiimtų visas išlaidas už visus gyventojų ar verslų netekimus“ laikytų populistiniu. Pagalbos \r\npriemonės – horizontalios Politiko vertinimu, kompensacijos už elektros sąnaudas turėtų tekti tik tiems \r\ngyventojams, kuriems jų labiausiai reikia, o verslas dalį išaugusių sąnaudų turėtų prisiimti sau – esą reikėjo \r\ngalvoti iš anksto ir investuoti į atsinaujinančią energetiką. Tačiau Vyriausybės suformuotas kitų metų \r\nbiudžeto projektas ne visai toks: išaugusios elektros kainos bus kompensuojamos visiems gyventojams taip, \r\nkad jos kaina siektų 28 centus už kilovatvalandę. Kompensacijas gaus ir visas verslas, tiesa, našta su valstybe \r\ndalinsis po lygiai.\r\n\r\n<h3>Pagalbos priemonės – horizontalios</h3>\r\n„Skirtumas tarp realios rinkos kainos ir 24 centų bus dalinamas į dvi dalis, pasakant paprastai. Pusę apmoka \r\nverslas, pusę apmoka valstybės biudžetas“, – anksčiau aiškino finansų ministrė Gintarė Skaistė. Numatyta, \r\nkad biudžeto deficitas kitais metais sieks 4,9 proc. nuo BVP, o valdžios sektoriaus skolos lygis – apie 43 proc. \r\nnuo BVP.\r\n\r\n„5 proc. yra šiokia tokia raudona linija, už kurios žengti toliau aš nenorėčiau, nes skolinimasis brangsta“, – \r\npažymėjo G. Skaistė. Bet gal nepritaikius horizontalių pagalbos priemonių minėta raudona linija nebūtų taip \r\narti? Gal reikėjo kitaip formuoti kitų metų biudžeto projektą?\r\n\r\n<h3>Starkevičius: valstybė turi turėti tęstinumą</h3>\r\nTokių pamąstymų, pasak Seimo Ekonomikos komiteto pirmininko, konservatoriaus Kazio Starkevičiaus, \r\nbuvo. Pasak jo, svarstyta eiti panašiu keliu, kurį anksčiau siūlė prezidentas Gitanas Nausėda: nustatyti \r\nelektros suvartojimo limitą, iki kurio sąnaudos už elektrą būtų kompensuojamos. Esą taip parama pasiektų \r\nsocialiai pažeidžiamus vartotojus, kurie paprastai suvartoja mažiau elektros energijos, o taip pat būtų \r\nskatinamas taupymas. Visgi tokio matymo atsisakyta. K. Starkevičiaus vertinimu, jis – populistinis.\r\n\r\n„Biudžetui ruošėmės ir diskutavom vasarą. Viena iš tokių diskusijų Ekonomikos komitete ir mano tokie \r\npamąstymai, galbūt būtų galima energetikoje elektros reguliuojamas kainas taikyti iki 100, iki 150 ar 200 \r\nkW/h mėnesiui. Tai lyg būtų [nutaikyta į tuos], kurie mažiau suvartoja, ir būtų skatinamas taupymas. Bet, kai \r\npasigilinau daugiau, visose priemonėse kelinti metai teikiame paramą įvairiems mažiems energetikos \r\nprojektams, šiluminiams siurbliams įsirengti, geoterminei energetikai, o jos pagrindas yra ta pati elektra. Tai \r\nmes tuo pačiu skatiname, o dabar sakysime ne, dabar kompensuosime tik 100 kW/h. O likusi dalis žmogui \r\npakels išlaidas taip, kad jis nepajėgs [jų susimokėti]. Tai valstybė irgi turi turėti tęstinumą ir matymą. Dabar \r\nbus kompensuojama pagal horizontalę, nebus skirstymo pagal atskirus sluoksnius vien dėl to, kad \r\nVyriausybė buvo ankstesniais projektais įsipareigojusi – niekas negalvojo, kad elektros energija brangs – \r\npaskatinti žmones įsirengti modernią šildymo sistemą“, – paaiškino K. Starkevičius.\r\n\r\n<h3>Teigia, kad taupymas nedavė norimo efekto</h3>\r\nBe to, skirstant kompensacijas tik tiems, kam labiausiai reikia, labai brangiai, anot politiko, kainuotų to \r\nadministravimas. Tiek biudžeto projektas, tiek skolinimosi lygis, K. Starkevičiaus vertinimu, yra subalansuoti. \r\nSvarbu, pasak jo, kad dabar su krize nebūtų tvarkomasi taip, kaip 2008–2009 metais, kai veržėmės diržus, \r\nbuvo didinami mokesčiai, akcizai.\r\n\r\n„Noriu prisiminti, kai dirbau Andriaus Kubiliaus Vyriausybėje. Mes tuomet iš tikrųjų taikėme griežtą taupymo \r\npolitiką, netgi pensijas nuėmėme. Ir ką ji davė? Nedavė to efekto, kurio norėjom. Įmonės nesugebėjo kurti \r\npridėtinės vertės ir mūsų ekonomika tais metais kirto 15 proc. BVP, nes nebuvo įliejama [pinigų] – \r\ninvesticijos kaip šviežias kraujas, to kraujo nebuvo įliejama.\r\n\r\nAš dabar už tai, kaip yra dabar <...>. Svarbiausia, kad įmonės neužsidarytų, įmonės dirbtų, o tam yra \r\nsuteikiama energetinė pagalvė. Tikėsimės, kad BVP kitais metais bus apie 0 proc. ar kažkoks panašus, bet \r\ntokios kritimo, koks buvo, nematysime“, – kalbėjo K. Starkevičius.',NULL,'2022-10-21 10:47:11','0'),(88,'Protestų kultūra Lietuvoje: dar netapo įpročiu, bet ekspertė tikra – kuo agresyvesni žmonės, tuo mažiau valdžia jų klausysis','Pastaraisiais metais Lietuvoje ženkliai išaugo protestų skaičius. Štai ir šį šeštadienį Šeimų sąjūdis Vilniuje \r\nžada surengti dar vieną akciją. LRT RADIJO kalbinta Vilniaus universiteto Tarptautinių santykių ir politikos \r\nmokslų instituto (VU TSPMI) dėstytoja, Pilietinės visuomenės instituto direktorė Ieva Petronytė-\r\nUrbonavičienė sako, jog didelio masto protestai Lietuvoje – dar retas reiškinys. Visgi, įvairių neramumų \r\nkamuojama visuomenė, būna, pereina ir prie smurto, tačiau tai atneša dar mažiau rezultatų.  \r\n\r\nProtestuojama tik krizių metu\r\n\r\nVU TSPMI dėstytoja I. Petronytė-Urbonavičienė LRT RADIJUI pasakoja – protestų kultūra Lietuvoje dar tik \r\nvystosi. Kol užsienyje protestuojama dažnai, o protestai laikomi brandžios demokratijos ženklu, mūsų \r\ntautiečiai į gatves nusprendžia eiti tik tada, kai jau iš tiesų nebegali pakelti esamos situacijos.\r\n\r\n„Nėra kasdien įprastas tas protesto veiksmas. Turime, aišku, įvairių akcijų, demonstracijų pakankamai dažnai \r\ndėl tokių klausimų, bet jos nebūna ypatingai gausios. O štai tokios gausesnės, labiau matomos, garsesnės \r\niniciatyvos atsiranda tada, kai iš tiesų kyla tokios jau pakankamai krizinės situacijos“, – tvirtina ekspertė.\r\n\r\nCOVID-19 pandemija, pabėgėlių krizė, Rusijos karas prieš Ukrainą, energetikos kainų šuolis – tokie faktoriai, \r\npašnekovės teigimu, pastaruoju metu kelia visuomenės nepasitenkinimą ir skatina protestuoti.\r\n\r\n„Įvairūs dalykai iš tiesų kelia visuomenės nerimą ir tiesiog tame bendrame kontekste bet kokia kibirkštėlė \r\nturi potencialo plėstis. (...) Kai yra visos tokios bazinės sąlygos, jog veiksmas išvirstų į radikalesnį, aktyvesnį, \r\ntiesiog užtenka tokio nedidelio sukiršinimo, nedidelio kibirkšties užžiebimo, kad tas nepasitenkinimas \r\nišvirstų į dar didesnius judėjimus“, – sako I. Petronytė-Urbonavičienė.',NULL,'2022-10-21 15:20:47','0');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-21 20:57:51
