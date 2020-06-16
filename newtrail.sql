-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 01:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtrail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `place` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `address`, `gmail`, `contact`, `place`) VALUES
(4, 'Dr Ravil Gupta', 'A2-001, Anand Nagar, RMMS, opp Vijaya Bank,, Dahisar East', 'ravilgupta@gmail.com', '08655990101', 'Mumbai'),
(5, 'Dr. Anand Swaroop Mathur', 'Narayana Multispeciality Hospital, Jaipur', 'anandmathur@gmail.com', '18602080208', 'Jaipur'),
(6, 'Dr. Amlan Kusum Jaja', 'Rabindranath Tagore International Institute of Cardiac Sciences, Kolkata', 'amlan@gmail.com', '18602080208', 'Kolkata'),
(7, ' Dr Gorav Gupta', 'Tulsi Psychiatric & Rehab Centre, Delhi', 'gupta@gmail.com', '8108545634', 'Delhi'),
(8, 'Dr Samir Parikh', 'Fortis Hospital, Shalimar Bagh, New Delhi', 'parikh@gmail.com', '8546367574', 'Delhi'),
(9, 'Dr C J Joseph', 'Brain and Mind Clinic, Little Flower Hospital, Angamaly. Kerala', 'cjjoseph@gmail.com', '04842675055', 'Kerala'),
(10, 'Dr. Somanath C.P', 'Sharanya House No X/600, Mavelipuram, Kakkanad, Kochi, Kerala', 'somanath@gmail.com', '09495581436', 'Kerala'),
(11, ' Dr Ajit Dandekar', ' Nanavati Super Speciality Hospital, Mumbai', 'ajit@gmail.com', '8108543434', 'Mumbai'),
(12, ' Dr Murali Raj', 'Manipal Hospital, Bangalore', 'muraliraj@gmail.com', '09495587736', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `questions`) VALUES
(1, 'You have been bothered by feeling down, depressed, irritable, or hopeless?'),
(2, 'You have trouble falling or staying asleep, or sleeping too much?'),
(3, 'You have trouble concentrating on things, such as reading the newspaper or watching television?'),
(4, 'You have poor appetite or you overeat?'),
(5, 'You been bothered by feeling tired, or having little energy?'),
(6, 'You have been moving or speaking so slowly that other people could have noticed? Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?'),
(7, 'You have thoughts that you would be better off dead, or of hurting yourself in some way?'),
(8, 'You been bothered by feeling bad about yourself or feeling that you are a failure, or that you have let yourself or your family down?'),
(9, 'You find social settings upsetting?'),
(10, 'You have little interest or pleasure in doing things?');

-- --------------------------------------------------------

--
-- Table structure for table `remedies`
--

CREATE TABLE `remedies` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `remedy` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remedies`
--

INSERT INTO `remedies` (`id`, `level`, `remedy`) VALUES
(10, 2, 'Get in a routine.'),
(11, 2, 'Saffron is a spice derived from a dried portion of a crocus, a flower in the iris family. According to a study in Alternative Medicine Review Trusted Source, taking saffron stigma (the end of the carpel, or rod-like stem, in the flower) has been shown to be effective in treating mild to moderate depression.'),
(12, 3, 'Zinc is a nutrient linked with mental functions such as learning and behavior. Low levels of blood zinc are associated with depression, according to an analysis in Biological Psychiatry. According to Nutrition Neuroscience Trusted Source, taking a 25-milligram zinc supplement daily for 12 weeks can help reduce depression symptoms. Taking zinc supplements can also increase the amount of available omega-3 fatty acids in the body.'),
(13, 3, 'Exercise can relieve depression, possibly by altering the mood-regulating brain chemicals norepinephrine and serotonin.\r\n'),
(14, 3, 'Light therapy: During the short, dark days of winter, some people are prone to a type of depression called seasonal effective disorder. One way to ease symptoms may be light therapy, in which you sit near a brightly lit box that mimics outdoor light. The therapy generally starts with daily sessions of about 15 minutes and increases to up to two hours daily. The timing depends upon the severity of symptoms and the intensity of the light, which a doctor can determine. Although the therapy doesn\'t cure depression, it can ease symptoms, sometimes after only a couple days.'),
(15, 3, 'Mood diary: Therapy that teaches people about positive thinking can relieve depression, research suggests. A mood diary keeps negative events in perspective and serves as a reminder that good days do happen.'),
(16, 2, 'Support groups: It used to be standard in psychiatric settings. But, he adds, they aren\'t used as frequently today, although they are an excellent way to help treat mild forms of depression.'),
(17, 1, 'Fish oil: This supplement contains omega-3 fatty acids, which are found in fish, including salmon, albacore tuna, and herring. Studies on fish oil are inconclusive, but it is thought that being deficient in this fatty acid at certain times (like during the postpartum period) can cause mood swings and depression. In areas where consumption of foods with omega-3 is high, people tend to have lower rates of depression.'),
(18, 1, 'Meditation: Promising research suggests that meditation may play a role in preventing depression relapse. The research focused on mindfulness-based cognitive therapy, which combines traditional meditation with cognitive behavioral approaches.'),
(19, 2, 'Yoga: Striking a pose may alleviate stress and symptoms of depression. Studies have shown that in both people with emotional distress and major depression, practicing yoga reduces stress, hostility, anxiety, and depression, and improves energy, sleep quality, and well-being.'),
(20, 1, 'Protect Your Sleep: From all my research on mood disorders over the last ten years, and from conversations with people who cannot get well, I would say that chronic stress and disrupted sleep cycles are the two biggest factors that prevent a person from climbing out of the depths of depression.'),
(21, 1, 'Nutrition: Eating well is important for both your physical and mental health. Eating small, well-balanced meals throughout the day will help you keep your energy up and minimize mood swings. While you may be drawn to sugary foods for the quick boost they provide, complex carbohydrates are a better choice. They will get you going without the all-too-soon sugar crash.'),
(22, 3, 'Relationships: Understanding the patterns of your relationships, building better relationships, and improving current relationships will help reduce isolation and build social support, important in preventing depression.');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `story` varchar(30000) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `story`, `name`) VALUES
(3, 'You shouldn\'t feel guilty for feeling the way you do. If I was to give one piece of advice to others who are struggling, it would be not to suffer in silence.', 'Sophie'),
(5, 'Sitting at my desk as I try to start this story, I\'m struggling to decide where to begin and I can feel it coming on. Shivers up my arms and into my neck, a heavy chest, now my legs start, I\'m not sure if I\'m hot or cold, my chest gets heavier as my body decides whether to fight or take flight.\r\n\r\nLuckily, I\'m aware of what\'s going on; my head remains calm as I write these words. Letting myself become overcome with the anxiety that is taking hold of my body, the natural response I feel when confronted with difficult tasks or stress, is not going to happen. I\'d like to show that if they\'re spotted early enough, mental health problems can be managed and even prevented.\r\n\r\nDealing with depression is an everyday struggle. It\'s definitely true that some days are worse than others, but I\'ve learned to manage it, to become aware of my symptoms, my triggers, and to remain in control.\r\n\r\nHowever, this has not always been the case. It\'s only of late that I have come to understand what\'s going on inside and the relationship between my body and mind. Awareness is the key to prevention and that is why I\'d like to share with you my story of battling depression. I don\'t want anyone else to feel the way I have done, to feel trapped and isolated by mental health problems and to not be able to see a light at the end of the tunnel.', 'Harry'),
(6, 'I am a mother of two. I want to share with you my personal story of recovery. Just keep in mind that this is my story and that itâ€™s not my intention to say that this is how it should be done. Everyone is different, everyoneâ€™s personal circumstances are unique and we all have to find our own path to getting better. You can only draw from other peopleâ€™s experiences. I have had depression before so I was already aware that I needed to talk to someone who knew what depression was and because I felt that I needed medication. My psychologist urgently when I had my first episode of antenatal depression (I had it during both pregnancies). Over the years I have built up a very good relationship with my family who supported me in this difficult times and I still see him from time to time to touch base and discuss the issues surrounding my depression. I still take medication and need to have a review from time to time.', 'Anonymous'),
(7, 'Depression... it just eats you up from the inside out. The scariest thing about my whole recovery process is that the only person who can truly help me is me. I have learnt to change my thought processes and stop bullying myself, it\'s a habit that\'s been hard to break but I know I\'ve made some positive changes.', 'Will');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remedies`
--
ALTER TABLE `remedies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `remedies`
--
ALTER TABLE `remedies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
