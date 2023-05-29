-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 29, 2023 alle 20:49
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sito`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `AllenatorePreferito`
--

CREATE TABLE `AllenatorePreferito` (
  `Nome` varchar(30) NOT NULL,
  `Sorgente` varchar(60) NOT NULL,
  `Utente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `AllenatorePreferito`
--

INSERT INTO `AllenatorePreferito` (`Nome`, `Sorgente`, `Utente`) VALUES
('guardiola', 'https://media-1.api-sports.io/football/coachs/4.png', 'marcello17'),
('de zerbi', 'https://media-3.api-sports.io/football/coachs/2424.png', 'marcello17');

-- --------------------------------------------------------

--
-- Struttura della tabella `Squadra`
--

CREATE TABLE `Squadra` (
  `Nome` varchar(100) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Lega` varchar(100) NOT NULL,
  `Stadio` varchar(100) NOT NULL,
  `FotoStadio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Squadra`
--

INSERT INTO `Squadra` (`Nome`, `Logo`, `Lega`, `Stadio`, `FotoStadio`) VALUES
('AC Milan', 'https://media-3.api-sports.io/football/teams/489.png', 'Serie A', 'San Siro', 'https://media-1.api-sports.io/football/venues/907.png'),
('Ajaccio', 'https://media-3.api-sports.io/football/teams/98.png', 'Ligue 1', 'Stade François Coty', 'https://media-3.api-sports.io/football/venues/632.png'),
('Almeria', 'https://media-3.api-sports.io/football/teams/723.png', 'La Liga', 'Power Horse Stadium', 'https://media-2.api-sports.io/football/venues/19216.png'),
('Angers', 'https://media-1.api-sports.io/football/teams/77.png', 'Ligue 1', 'Stade Raymond-Kopa', 'https://media-2.api-sports.io/football/venues/634.png'),
('Arsenal', 'https://media-3.api-sports.io/football/teams/42.png', 'Premier League', 'Emirates Stadium', 'https://media-3.api-sports.io/football/venues/494.png'),
('AS Roma', 'https://media-3.api-sports.io/football/teams/497.png', 'Serie A', 'Stadio Olimpico', 'https://media-1.api-sports.io/football/venues/910.png'),
('Aston Villa', 'https://media-3.api-sports.io/football/teams/66.png', 'Premier League', 'Villa Park', 'https://media-3.api-sports.io/football/venues/495.png'),
('Atalanta', 'https://media-3.api-sports.io/football/teams/499.png', 'Serie A', 'Gewiss Stadium', 'https://media-1.api-sports.io/football/venues/879.png'),
('Athletic Club', 'https://media-3.api-sports.io/football/teams/531.png', 'La Liga', 'San Mamés Barria', 'https://media-2.api-sports.io/football/venues/1460.png'),
('Atletico Madrid', 'https://media-3.api-sports.io/football/teams/530.png', 'La Liga', 'Estádio Cívitas Metropolitano', 'wanda.jpeg'),
('Auxerre', 'https://media-3.api-sports.io/football/teams/108.png', 'Ligue 1', 'Stade de l Abbé Deschamps', 'https://media-3.api-sports.io/football/venues/636.png'),
('Barcelona', 'https://media-3.api-sports.io/football/teams/529.png', 'La Liga', 'Camp Nou', 'https://media-2.api-sports.io/football/venues/18630.png'),
('Bologna', 'https://media-3.api-sports.io/football/teams/500.png', 'Serie A', 'Stadio Renato DallAra', 'https://media-1.api-sports.io/football/venues/881.png'),
('Bournemouth', 'https://media-3.api-sports.io/football/teams/35.png', 'Premier League', 'Vitality Stadium', 'https://media-3.api-sports.io/football/venues/504.png'),
('Brentford', 'https://media-3.api-sports.io/football/teams/55.png', 'Premier League', 'Gtech Community Stadium', 'brentford.jpeg'),
('Brighton', 'https://media-3.api-sports.io/football/teams/51.png', 'Premier League', 'The American Express Community Stadium', 'https://media-3.api-sports.io/football/venues/508.png'),
('Cadiz', 'https://media-3.api-sports.io/football/teams/724.png', 'La Liga', 'Estadio Nuevo Mirandilla', 'https://media-2.api-sports.io/football/venues/11915.png'),
('Celta Vigo', 'https://media-3.api-sports.io/football/teams/538.png', 'La Liga', 'Abanca-Balaídos', 'https://media-2.api-sports.io/football/venues/1467.png'),
('Chelsea', 'https://media-3.api-sports.io/football/teams/49.png', 'Premier League', 'Stamford Bridge', 'https://media-3.api-sports.io/football/venues/519.png'),
('Clermont Foot', 'https://media-3.api-sports.io/football/teams/99.png', 'Ligue 1', 'Stade Gabriel Montpied', 'https://media-3.api-sports.io/football/venues/644.png'),
('Cremonese', 'https://media-3.api-sports.io/football/teams/520.png', 'Serie A', 'Stadio Giovanni Zini', 'https://media-1.api-sports.io/football/venues/894.png'),
('Crystal Palace', 'https://media-3.api-sports.io/football/teams/52.png', 'Premier League', 'Selhurst Park', 'https://media-3.api-sports.io/football/venues/525.png'),
('Elche', 'https://media-3.api-sports.io/football/teams/797.png', 'La Liga', 'Estadio Manuel Martínez Valero', 'https://media-2.api-sports.io/football/venues/1473.png'),
('Empoli', 'https://media-3.api-sports.io/football/teams/511.png', 'Serie A', 'Stadio Carlo Castellani', 'https://media-1.api-sports.io/football/venues/896.png'),
('Espanyol', 'https://media-3.api-sports.io/football/teams/540.png', 'La Liga', 'RCDE Stadium', 'https://media-2.api-sports.io/football/venues/1474.png'),
('Everton', 'https://media-3.api-sports.io/football/teams/45.png', 'Premier League', 'Goodison Park', 'https://media-3.api-sports.io/football/venues/8560.png'),
('Fiorentina', 'https://media-3.api-sports.io/football/teams/502.png', 'Serie A', 'Stadio Artemio Franchi', 'https://media-1.api-sports.io/football/venues/902.png'),
('Fulham', 'https://media-3.api-sports.io/football/teams/36.png', 'Premier League', 'Craven Cottage', 'https://media-3.api-sports.io/football/venues/535.png'),
('Getafe', 'https://media-3.api-sports.io/football/teams/546.png', 'La Liga', 'Coliseum Alfonso Pérez', 'https://media-2.api-sports.io/football/venues/1476.png'),
('Girona', 'https://media-3.api-sports.io/football/teams/547.png', 'La Liga', 'Estadi Municipal de Montilivi', 'https://media-2.api-sports.io/football/venues/1478.png'),
('Inter', 'https://media-3.api-sports.io/football/teams/505.png', 'Serie A', 'Stadio Giuseppe Meazza', 'https://media-1.api-sports.io/football/venues/907.png'),
('Juventus', 'https://media-3.api-sports.io/football/teams/496.png', 'Serie A', 'Allianz Stadium', 'https://media-1.api-sports.io/football/venues/909.png'),
('Lazio', 'https://media-1.api-sports.io/football/teams/487.png', 'Serie A', 'Stadio Olimpico', 'https://media-1.api-sports.io/football/venues/910.png'),
('Lecce', 'https://media-3.api-sports.io/football/teams/867.png', 'Serie A', 'Stadio Comunale Via Del Mare', 'https://media-1.api-sports.io/football/venues/911.png'),
('Leeds', 'https://media-3.api-sports.io/football/teams/63.png', 'Premier League', 'Elland Road', 'https://media-3.api-sports.io/football/venues/546.png'),
('Leicester', 'https://media-3.api-sports.io/football/teams/46.png', 'Premier League', 'King Power Stadium', 'https://media-3.api-sports.io/football/venues/547.png'),
('Lens', 'https://media-3.api-sports.io/football/teams/116.png', 'Ligue 1', 'Stade Bollaert-Delelis', 'https://media-3.api-sports.io/football/venues/654.png'),
('Lille', 'https://media-1.api-sports.io/football/teams/79.png', 'Ligue 1', 'Decathlon Arena – Stade Pierre-Mauroy', 'https://media-2.api-sports.io/football/venues/19207.png'),
('Liverpool', 'https://media-3.api-sports.io/football/teams/40.png', 'Premier League', 'Anfield', 'https://media-3.api-sports.io/football/venues/550.png'),
('Lyon', 'https://media-1.api-sports.io/football/teams/80.png', 'Ligue 1', 'Groupama Stadium', 'https://media-2.api-sports.io/football/venues/666.png'),
('Mallorca', 'https://media-3.api-sports.io/football/teams/798.png', 'La Liga', 'Palma de Mallorca', 'https://media-2.api-sports.io/football/venues/12597.png'),
('Manchester City', 'https://media-3.api-sports.io/football/teams/50.png', 'Premier League', 'Etihad Stadium', 'https://media-3.api-sports.io/football/venues/555.png'),
('Manchester United', 'https://media-3.api-sports.io/football/teams/33.png', 'Premier League', 'Old Trafford', 'https://media-3.api-sports.io/football/venues/556.png'),
('Marseille', 'https://media-3.api-sports.io/football/teams/81.png', 'Ligue 1', 'Stade Orange Vélodrome', 'https://media-2.api-sports.io/football/venues/12678.png'),
('Monaco', 'https://media-1.api-sports.io/football/teams/91.png', 'Ligue 1', 'Stade Louis II', 'https://media-2.api-sports.io/football/venues/659.png'),
('Montpellier', 'https://media-1.api-sports.io/football/teams/82.png', 'Ligue 1', 'Stade de la Mosson', 'https://media-2.api-sports.io/football/venues/660.png'),
('Monza', 'https://media-3.api-sports.io/football/teams/1579.png', 'Serie A', 'U-Power Stadium', 'https://media-1.api-sports.io/football/venues/12086.png'),
('Nantes', 'https://media-2.api-sports.io/football/teams/83.png', 'Ligue 1', 'Stade de la Beaujoire - Louis Fonteneau', 'https://media-3.api-sports.io/football/venues/662.png'),
('Napoli', 'https://media-3.api-sports.io/football/teams/492.png', 'Serie A', 'Diego Armando Maradona', 'https://media-1.api-sports.io/football/venues/11904.png'),
('Newcastle', 'https://media-3.api-sports.io/football/teams/34.png', 'Premier League', 'St. James Park', 'https://media-3.api-sports.io/football/venues/562.png'),
('Nice', 'https://media-1.api-sports.io/football/teams/84.png', 'Ligue 1', 'Allianz Riviera', 'https://media-3.api-sports.io/football/venues/663.png'),
('Nottingham Forest', 'https://media-3.api-sports.io/football/teams/65.png', 'Premier League', 'The City Ground', 'https://media-3.api-sports.io/football/venues/566.png'),
('Osasuna', 'https://media-3.api-sports.io/football/teams/727.png', 'La Liga', 'Estadio El Sadar', 'https://media-2.api-sports.io/football/venues/1486.png'),
('Paris Saint Germain', 'https://media-1.api-sports.io/football/teams/85.png', 'Ligue 1', 'Parc des Princes', 'https://media-2.api-sports.io/football/venues/671.png'),
('Rayo Vallecano', 'https://media-3.api-sports.io/football/teams/728.png', 'La Liga', 'Estadio de Vallecas', 'https://media-2.api-sports.io/football/venues/1488.png'),
('Real Betis', 'https://media-3.api-sports.io/football/teams/543.png', 'La Liga', 'Estadio Benito Villamarín', 'https://media-2.api-sports.io/football/venues/1489.png'),
('Real Madrid', 'https://media-3.api-sports.io/football/teams/541.png', 'La Liga', 'Estadio Santiago Bernabéu', 'https://media-2.api-sports.io/football/venues/1456.png'),
('Real Socieadad', 'https://media-3.api-sports.io/football/teams/548.png', 'La Liga', 'Reale Arena', 'https://media-2.api-sports.io/football/venues/1491.png'),
('Real Valladolid', 'https://media-3.api-sports.io/football/teams/720.png', 'La Liga', 'Estadio Municipal José Zorrilla', 'https://media-2.api-sports.io/football/venues/1492.png'),
('Reims', 'https://media-1.api-sports.io/football/teams/93.png', 'Ligue 1', 'Stade Auguste-Delaune II', 'https://media-2.api-sports.io/football/venues/674.png'),
('Rennes', 'https://media-3.api-sports.io/football/teams/94.png', 'Ligue 1', 'Roazhon Park', 'https://media-1.api-sports.io/football/venues/680.png'),
('Salernitana', 'https://media-3.api-sports.io/football/teams/514.png', 'Serie A', 'Stadio Arechi', 'https://media-1.api-sports.io/football/venues/933.png'),
('Sampdoria', 'https://media-3.api-sports.io/football/teams/498.png', 'Serie A', 'Stadio Comunale Luigi Ferraris', 'https://media-1.api-sports.io/football/venues/905.png'),
('Sassuolo', 'https://media-3.api-sports.io/football/teams/488.png', 'Serie A', 'MAPEI Stadium', 'https://media-1.api-sports.io/football/venues/935.png'),
('Sevilla', 'https://media-3.api-sports.io/football/teams/536.png', 'La Liga', 'Estadio Ramón Sánchez Pizjuán', 'https://media-2.api-sports.io/football/venues/1494.png'),
('Southampton', 'https://media-3.api-sports.io/football/teams/41.png', 'Premier League', 'St. Mary Stadium', 'https://media-3.api-sports.io/football/venues/585.png'),
('Spezia', 'https://media-3.api-sports.io/football/teams/515.png', 'Serie A', 'Stadio Alberto Picco', 'https://media-1.api-sports.io/football/venues/939.png'),
('Stade Brestois 29', 'https://media-1.api-sports.io/football/teams/106.png', 'Ligue 1', 'Stade Francis-Le Blé', 'https://media-1.api-sports.io/football/venues/641.png'),
('Strasbourg', 'https://media-2.api-sports.io/football/teams/95.png', 'Ligue 1', 'Stade de la Meinau', 'https://media-1.api-sports.io/football/venues/681.png'),
('Torino', 'https://media-3.api-sports.io/football/teams/503.png', 'Serie A', 'Stadio Olimpico Grande Torino', 'https://media-1.api-sports.io/football/venues/943.png'),
('Tottenham', 'https://media-3.api-sports.io/football/teams/47.png', 'Premier League', 'Tottenham Hotspur Stadium', 'tottenham.jpeg'),
('Toulouse', 'https://media-3.api-sports.io/football/teams/96.png', 'Ligue 1', 'Stadium de Toulouse', 'https://media-2.api-sports.io/football/venues/682.png'),
('Troyes', 'https://media-3.api-sports.io/football/teams/110.png', 'Ligue 1', 'Stade de l Aube', 'https://media-3.api-sports.io/football/venues/684.png'),
('Udinese', 'https://media-3.api-sports.io/football/teams/494.png', 'Serie A', 'Dacia Arena', 'https://media-1.api-sports.io/football/venues/928.png'),
('Valencia', 'https://media-3.api-sports.io/football/teams/532.png', 'La Liga', 'Estadio de Mestalla', 'https://media-2.api-sports.io/football/venues/1497.png'),
('Verona', 'https://media-3.api-sports.io/football/teams/504.png', 'Serie A', 'Stadio Bentegodi', 'https://media-1.api-sports.io/football/venues/890.png'),
('Villareal', 'https://media-3.api-sports.io/football/teams/531.png', 'La Liga', 'Estadio de la Cerámica', 'https://media-2.api-sports.io/football/venues/1498.png'),
('West Ham', 'https://media-3.api-sports.io/football/teams/48.png', 'Premier League', 'London Stadium', 'https://media-3.api-sports.io/football/venues/598.png'),
('Wolves', 'https://media-3.api-sports.io/football/teams/39.png', 'Premier League', 'Molineux Stadium', 'https://media-3.api-sports.io/football/venues/600.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `SquadraPreferita`
--

CREATE TABLE `SquadraPreferita` (
  `Nome` varchar(30) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Stadio` varchar(30) NOT NULL,
  `FotoStadio` varchar(100) NOT NULL,
  `Utente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `SquadraPreferita`
--

INSERT INTO `SquadraPreferita` (`Nome`, `Logo`, `Stadio`, `FotoStadio`, `Utente`) VALUES
('Lazio', 'https://media-1.api-sports.io/football/teams/487.png', 'Stadio Olimpico', 'https://media-1.api-sports.io/football/venues/910.png', 'marcello17'),
('Liverpool', 'https://media-3.api-sports.io/football/teams/40.png', 'Anfield', 'https://media-3.api-sports.io/football/venues/550.png', 'marco1'),
('Leicester', 'https://media-3.api-sports.io/football/teams/46.png', 'King Power Stadium', 'https://media-3.api-sports.io/football/venues/547.png', 'marco1'),
('Chelsea', 'https://media-3.api-sports.io/football/teams/49.png', 'Stamford Bridge', 'https://media-3.api-sports.io/football/venues/519.png', 'marco1'),
('Napoli', 'https://media-3.api-sports.io/football/teams/492.png', 'Diego Armando Maradona', 'https://media-1.api-sports.io/football/venues/11904.png', 'marcello17'),
('Sampdoria', 'https://media-3.api-sports.io/football/teams/498.png', 'Stadio Comunale Luigi Ferraris', 'https://media-1.api-sports.io/football/venues/905.png', 'marcello17'),
('Inter', 'https://media-3.api-sports.io/football/teams/505.png', 'Stadio Giuseppe Meazza', 'https://media-1.api-sports.io/football/venues/907.png', 'marcello17'),
('Leeds', 'https://media-3.api-sports.io/football/teams/63.png', 'Elland Road', 'https://media-3.api-sports.io/football/venues/546.png', 'marco1');

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`username`, `email`, `telefono`, `password`) VALUES
('giovanni', 'giovanni@gmail.com', '3490876435', 'ProfiloProva2'),
('marcello17', 'marcello@gmail.com', '3321909715', 'ProfiloProva1'),
('marco1', 'marco@gmail.com', '3209856742', 'ProfiloProva3');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `AllenatorePreferito`
--
ALTER TABLE `AllenatorePreferito`
  ADD PRIMARY KEY (`Sorgente`,`Utente`);

--
-- Indici per le tabelle `Squadra`
--
ALTER TABLE `Squadra`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `SquadraPreferita`
--
ALTER TABLE `SquadraPreferita`
  ADD PRIMARY KEY (`Logo`,`Utente`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
