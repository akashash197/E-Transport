-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 08:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etransport`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `category_id`, `author_id`, `image`, `short_description`, `long_description`, `created_on`, `updated_on`, `status`) VALUES
(15, 'Plant-Based Delights: Exploring the World of Vegetarian Cuisine', 7, 20, 'usr_230510084809veg-food.jpg', 'Discover the wonders of vegetarian cuisine with this blog with simple recipes', 'Welcome to \"Plant-Based Delights,\" a blog dedicated to the delicious and diverse world of vegetarian cuisine. Here, we\'ll share recipes, cooking tips, and stories from our own experiences with plant-based eating.\r\n<br><br>\r\nIf you\'re new to vegetarianism or veganism, you might be wondering what all the fuss is about. Isn\'t it hard to get enough protein? Don\'t you miss meat? Actually, no! With a little know-how, you can create meals that are satisfying, nutritious, and full of flavor.\r\n<br><br>\r\nOne of the great things about vegetarianism is how many different cultures have their own meat-free specialties. Indian cuisine, for example, has a long tradition of vegetarian cooking, with dishes like chana masala, saag paneer, and dosas. In Japan, you can find delicious vegan sushi made with avocado, cucumber, and pickled vegetables. And of course, there are plenty of vegetarian options in Mediterranean cuisine, from hummus to tabbouleh.\r\n<br><br>\r\nBut even if you\'re not interested in international cuisine, there are plenty of simple and delicious vegetarian meals you can make at home. How about a hearty lentil soup, a colorful stir-fry with lots of veggies, or a plate of spaghetti with homemade tomato sauce? We\'ll share our favorite recipes and cooking tips so you can feel confident in the kitchen.\r\n<br><br>\r\nWhy choose vegetarianism? There are many good reasons! For one, it\'s better for the environment. Meat production takes up a lot of land, water, and other resources, and produces a lot of greenhouse gases. Eating plant-based foods is also good for your health, reducing the risk of heart disease, diabetes, and some forms of cancer.\r\n<br><br>\r\nSo whether you\'re a lifelong vegetarian or just curious about trying it out, \"Plant-Based Delights\" is the perfect place to explore the world of meat-free eating. We hope you\'ll join us on this delicious journey!', '2023-05-04', '2023-05-17', '1'),
(16, 'Hidden Gems of the Pacific: Exploring the Uncharted Paradises', 5, 19, 'usr_23050408000416travel.jpg', 'Join me on an unforgettable journey to discover the hidden gems of the Pacific.', 'Welcome to \"Hidden Gems of the Pacific: Exploring the Uncharted Paradises,\" a travel blog that will transport you to the lesser-known corners of the Pacific. Beyond the popular tourist destinations, this blog is dedicated to uncovering the hidden treasures that lie off the beaten path. Get ready to embark on a journey that will introduce you to breathtaking landscapes, enchanting cultures, and extraordinary experiences.\r\n<br><br>\r\nImagine stepping onto untouched stretches of white sand, where turquoise waves gently kiss the shore. Picture yourself immersed in dense rainforests teeming with exotic flora and fauna, where every step brings you closer to the heart of nature. From remote islands to secluded bays, the Pacific is home to a wealth of natural wonders that are waiting to be discovered.\r\n<br><br>\r\nBut this blog isn\'t just about the landscapes; it\'s about the people and cultures that make these destinations truly come alive. Immerse yourself in the traditions and rituals of indigenous communities, where ancient customs are still practiced and vibrant festivals showcase a rich tapestry of heritage. Connect with the locals, listen to their stories, and embrace the warmth and hospitality that is characteristic of Pacific island life.\r\n<br><br>\r\nJoin me as we explore the hidden gems of the Pacific, from the captivating islands of Fiji and the pristine shores of Bora Bora to the remote landscapes of Palau and the cultural marvels of Papua New Guinea. Together, we\'ll delve into the lesser-known corners of these paradises, where the beauty is untouched and the experiences are authentic.\r\n<br><br>\r\nWhether you\'re a seasoned traveler seeking new horizons or a curious soul yearning for adventure, this travel blog will guide you to destinations that will leave you in awe. With insider tips, detailed itineraries, and firsthand accounts, you\'ll have all the information you need to plan your own journey of discovery. Get ready to set sail on an unforgettable adventure, where paradise awaits around every corner.\r\n<br><br>\r\nSo pack your bags, open your heart to new experiences, and let \"Hidden Gems of the Pacific\" be your compass as you uncover the magic of these uncharted paradises. Together, we\'ll create memories that will last a lifetime, and you\'ll come away with a deeper understanding of the beauty and diversity that the Pacific has to offer. Let the journey begin!', '2023-05-04', '2023-05-17', '1'),
(17, 'Mastering Online Marketing: Strategies for Success', 2, 21, 'usr_23050408044417marketing.jpg', 'Unlock the secrets to effectively reach your target audience in digital age.', 'In today\'s digital age, online marketing has become an essential component of any successful business strategy. With the vast array of channels and tools available, mastering the art of online marketing can make a significant difference in your brand\'s visibility, customer engagement, and bottom line.\r\n<br><br>\r\nThis blog, \"Mastering Online Marketing: Strategies for Success,\" is your ultimate guide to understanding and harnessing the power of digital marketing. Whether you\'re a seasoned marketer looking to refine your skills or a business owner exploring the world of online advertising, this comprehensive resource is designed to equip you with the knowledge and strategies needed to thrive in the digital realm.\r\n<br><br>\r\nWe\'ll explore various facets of online marketing, including search engine optimization (SEO), social media marketing, content creation, email marketing, pay-per-click advertising (PPC), and more. By examining each aspect in detail, you\'ll gain a holistic understanding of how these techniques work together to create a cohesive and effective marketing strategy.\r\n<br><br>\r\nStay up-to-date with the latest industry trends and emerging technologies that can amplify your online marketing efforts. We\'ll delve into topics like influencer marketing, video marketing, voice search optimization, and chatbot integration. By embracing these innovative approaches, you can stay ahead of the curve and connect with your audience on a deeper level.\r\n<br><br>\r\nLearn how to identify and target your ideal customers using data-driven insights and analytics. Discover the power of customer segmentation and personalization, and explore the tools and platforms that can help you gather valuable customer data to fuel your marketing campaigns.\r\n<br><br>\r\nIn addition, we\'ll discuss the importance of creating compelling content that resonates with your target audience. From crafting engaging blog posts to producing high-quality videos, we\'ll provide tips and tricks to ensure your content strategy captivates and converts.\r\n<br><br>\r\nFurthermore, we\'ll delve into the realm of social media marketing, exploring the most effective platforms and strategies for building a strong online presence. Uncover the secrets of viral content, community management, and leveraging social media advertising to maximize your brand\'s reach.\r\n<br><br>\r\nFinally, we\'ll explore the world of analytics and measurement, highlighting the importance of tracking key performance indicators (KPIs) and utilizing data to optimize your marketing campaigns. Discover how to interpret analytics reports, make data-driven decisions, and continually refine your strategies for long-term success.\r\n<br><br>\r\nIn a rapidly evolving digital landscape, it\'s crucial to stay informed and adapt your marketing efforts accordingly. \"Mastering Online Marketing: Strategies for Success\" is your go-to resource for navigating the ever-changing world of online marketing, providing you with actionable insights, practical tips, and real-world examples to supercharge your marketing efforts and drive impressive results for your business.', '2023-05-04', '2023-05-17', '1'),
(18, 'The Future of Remote Work: Embracing the New Paradigm', 3, 17, 'usr_23050408123418business.jpg', 'Discover how remote work is reshaping the business landscape', 'In recent years,      remote work has emerged as a transformative force in the business world. Once considered a luxury, it has now become a necessity for many organizations worldwide. The COVID-19 pandemic acted as a catalyst, accelerating the adoption of remote work and forcing businesses to rethink their traditional work models. As we move into the future, it\'s crucial for companies to understand the significance of remote work and embrace its potential benefits.\r\n<br><br>\r\nRemote work offers numerous advantages for both employees and employers. For individuals, it provides flexibility, eliminating the need for commuting and allowing a better work-life balance. Employees can create their own ideal work environment, leading to increased job satisfaction and productivity. On the other hand, businesses benefit from access to a larger talent pool since they are no longer confined to hiring within a specific geographic area. By embracing remote work, companies can tap into a diverse range of skills and expertise, leading to enhanced innovation and problem-solving.\r\n<br><br>\r\nMoreover, remote work has the potential to reduce costs significantly. Organizations can save on office space, utilities, and other related expenses. By adopting remote work policies, companies can redirect these resources towards strategic investments, such as employee training and development, technology infrastructure, or expanding into new markets. Additionally, remote work allows businesses to be more resilient in the face of disruptions. Natural disasters, transportation strikes, or unforeseen circumstances can no longer paralyze operations, as employees can seamlessly work from anywhere.\r\n<br><br>\r\nHowever, embracing remote work also presents challenges that businesses must address. Communication and collaboration can be more challenging in a virtual environment. Companies need to invest in robust digital tools and platforms to facilitate effective teamwork and maintain strong connections among remote team members. Additionally, leaders must adopt new management strategies to ensure employee engagement, motivation, and accountability.\r\n<br><br>\r\nTo adapt to the new paradigm of remote work, organizations need to create a culture that supports and empowers remote employees. This involves fostering trust, setting clear expectations, and providing the necessary resources and support for remote workers to thrive. Companies should establish remote work policies and guidelines that promote work-life balance, set realistic goals, and facilitate open communication.\r\n<br><br>\r\nIn conclusion, remote work is here to stay, and businesses must embrace this new paradigm to remain competitive in the evolving global landscape. By recognizing the potential benefits and challenges associated with remote work, organizations can develop strategies to effectively leverage its advantages while addressing its limitations. Embracing remote work enables companies to tap into a global talent pool, reduce costs, and enhance resilience. It\'s time for businesses to adapt, evolve, and embrace the future of work.', '2023-05-04', '2023-05-17', '1'),
(19, 'The Evolution of Football Tactics: From Catenaccio to Tiki-Taka', 11, 18, 'usr_23050408201019sports.jpg', 'In this sport blog, we\'ll take a deep dive into the evolution of football tactics', 'Football, or soccer as it\'s known in some parts of the world, has evolved immensely since its inception. Along with changes in technology, training methods, and player fitness, tactics have played a significant role in shaping the sport. From the early days of a 2-3-5 formation to the more recent 4-3-3, football tactics have undergone significant changes.\r\n<br><br>\r\nOne of the most influential tactics in football history was the Catenaccio. Developed by Helenio Herrera, an Italian coach, in the 1960s, Catenaccio was a highly defensive tactic that focused on a solid backline and counter-attacking play. The system involved a sweeper, or libero, who would act as the last line of defence and initiate counter-attacks. The formation was so effective that Herrera\'s Inter Milan team won two consecutive European Cups in 1964 and 1965.\r\n<br><br>\r\nIn the 1970s, a new style of play emerged that would change football forever. Total Football, developed by the Dutch coach Rinus Michels, was a more fluid and attacking style of play. The system involved players interchanging positions, with defenders moving forward and attackers tracking back. This tactic was highly successful, with the Dutch national team reaching the 1974 World Cup final playing this style of football.\r\n<br><br>\r\nAnother revolutionary tactic that emerged in the early 2000s was Tiki-Taka. Developed by the Spanish national team coach, Luis Aragones, the system involved a high degree of possession-based football, with short passes and quick movements. The tactic proved highly successful for the Spanish team, who won the 2010 World Cup and the 2012 European Championships using Tiki-Taka.\r\n<br><br>\r\nIn recent years, football tactics have continued to evolve, with teams experimenting with various formations and styles of play. Some coaches have adopted a more pressing style of play, while others have focused on a more direct approach. Whatever the approach, tactics continue to be a critical aspect of football, and they will undoubtedly continue to evolve in the years to come.\r\n<br><br>\r\nIn conclusion, football tactics have undergone significant changes over the years, from the defensive-minded Catenaccio to the possession-based Tiki-Taka. These tactics have had a profound impact on the sport, shaping the way teams approach the game and influencing their chances of success. As football continues to evolve, we can expect to see new tactics emerging that will continue to push the boundaries of the beautiful game', '2023-05-04', '2023-05-17', '1'),
(20, 'Spice Up Your Life: Exploring the World of Indian Cuisine', 7, 22, 'usr_23050408231220food.jpg', ' Discover the diverse flavors of Indian cuisine as we take you on a culinary journey', 'If you\'re looking to explore new culinary horizons, look no further than the vibrant and delicious world of Indian cuisine. Whether you\'re a seasoned foodie or just starting to discover the joys of cooking, there\'s something for everyone in the wide array of dishes that make up this diverse and flavorful cuisine.\r\n<br><br>                                                                                                                                                                                                                                        \r\nOne of the most distinctive features of Indian food is the use of spices and herbs. From the pungent heat of chili peppers to the complex sweetness of cinnamon and cardamom, the spices used in Indian cuisine create a rich tapestry of flavors that can range from fiery and intense to subtle and nuanced.\r\n<br><br>\r\nOne classic dish that showcases the unique blend of spices found in Indian cuisine is biryani. This fragrant rice dish is often made with a mix of aromatic spices like cumin, coriander, and turmeric, as well as fresh herbs like mint and cilantro. The result is a deeply flavorful and satisfying meal that is perfect for sharing with friends and family.\r\n<br><br>\r\nOf course, no discussion of Indian cuisine would be complete without mentioning the wide array of curries that make up the heart of this rich culinary tradition. From the creamy, tomato-based flavors of butter chicken to the fiery heat of vindaloo, there is a curry to suit every taste and preference.\r\n<br><br>\r\nAnd let\'s not forget about the delicious snacks and sweets that are also a key part of Indian cuisine. Whether you\'re enjoying a crispy samosa filled with spiced potatoes and peas or indulging in a sweet and creamy dessert like kulfi or ras malai, there are endless opportunities to explore the many flavors and textures of Indian food.\r\n<br><br>\r\nSo why not spice up your life and give Indian cuisine a try? Whether you\'re cooking at home or exploring the many wonderful Indian restaurants in your area, there\'s no better way to experience the rich and diverse flavors of this amazing culinary tradition.', '2023-05-04', '2023-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`id`, `name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Web Design', '2023-05-03', '2023-05-03', '1'),
(2, 'Online Marketing', '2023-05-03', '2023-05-03', '1'),
(3, 'Business', '2023-05-04', '2023-05-04', '1'),
(4, 'Corporate Blog', '2023-05-04', '2023-05-04', '1'),
(5, 'Travel', '2023-05-04', '2023-05-04', '1'),
(7, 'Food', '2023-05-04', '2023-05-04', '1'),
(8, 'Lifestyle', '2023-05-04', '2023-05-04', '1'),
(9, 'Health and Fitness', '2023-05-04', '2023-05-04', '1'),
(10, 'Art and Design', '2023-05-04', '2023-05-04', '1'),
(11, 'Sports', '2023-05-04', '2023-05-04', '1'),
(12, 'Artificial Intelligence', '2023-05-05', '2023-05-05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `name`, `country_id`, `state_id`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Rewari', 1, 1, '2023-04-23', '2023-05-18', '1'),
(2, 'Gurugram', 1, 1, '2023-04-23', '2023-04-23', '1'),
(10, 'Mumbai', 1, 2, '2023-04-24', '2023-04-24', '1'),
(11, 'Thane', 1, 2, '2023-04-24', '2023-04-24', '1'),
(17, 'Faridabad', 1, 1, '2023-04-29', '2023-04-29', '1'),
(19, 'Rohtak', 1, 1, '2023-05-17', '2023-05-17', '1'),
(20, 'Hisar', 1, 1, '2023-05-17', '2023-05-17', '1'),
(21, 'Ambala', 1, 1, '2023-05-17', '2023-05-17', '1'),
(22, 'Panchkula', 1, 1, '2023-05-17', '2023-05-17', '1'),
(23, 'Lucknow', 1, 3, '2023-05-17', '2023-05-17', '1'),
(24, 'Kanpur', 1, 3, '2023-05-17', '2023-05-17', '1'),
(25, 'Prayagraj', 1, 3, '2023-05-17', '2023-05-17', '1'),
(26, 'Agra', 1, 3, '2023-05-17', '2023-05-17', '1'),
(27, 'Pune', 1, 2, '2023-05-17', '2023-05-17', '1'),
(28, 'Nagpur', 1, 2, '2023-05-17', '2023-05-17', '1'),
(29, 'Nashik', 1, 2, '2023-05-17', '2023-05-17', '1'),
(30, 'Chennai', 1, 5, '2023-05-17', '2023-05-17', '1'),
(31, 'Coimbatore', 1, 5, '2023-05-17', '2023-05-17', '1'),
(32, 'Salem', 1, 5, '2023-05-17', '2023-05-17', '1'),
(33, 'Mapusa', 1, 8, '2023-05-17', '2023-05-17', '1'),
(34, ' Panaji', 1, 8, '2023-05-17', '2023-05-17', '1'),
(35, 'Margao', 1, 8, '2023-05-17', '2023-05-17', '1'),
(36, 'Gangtok', 1, 9, '2023-05-17', '2023-05-17', '1'),
(37, 'Geyzing', 1, 9, '2023-05-17', '2023-05-17', '1'),
(38, 'Namchi', 1, 9, '2023-05-17', '2023-05-17', '1'),
(39, 'Ahmedabad', 1, 10, '2023-05-17', '2023-05-17', '1'),
(40, 'Surat', 1, 10, '2023-05-17', '2023-05-17', '1'),
(41, 'Vadodara', 1, 10, '2023-05-17', '2023-05-17', '1'),
(42, ' Rajkot', 1, 10, '2023-05-17', '2023-05-17', '1'),
(43, 'Bengaluru', 1, 11, '2023-05-17', '2023-05-17', '1'),
(44, ' Mysuru', 1, 11, '2023-05-17', '2023-05-17', '1'),
(45, 'Vijayapura', 1, 11, '2023-05-17', '2023-05-17', '1'),
(46, 'Shimla', 1, 14, '2023-05-17', '2023-05-17', '1'),
(47, 'Solan', 1, 14, '2023-05-17', '2023-05-17', '1'),
(48, 'Manali', 1, 14, '2023-05-17', '2023-05-17', '1'),
(49, 'Kangra', 1, 14, '2023-05-17', '2023-05-17', '1'),
(50, 'Ujjain', 1, 15, '2023-05-17', '2023-05-17', '1'),
(51, 'Indore', 1, 15, '2023-05-17', '2023-05-17', '1'),
(52, 'Bhopal', 1, 15, '2023-05-17', '2023-05-17', '1'),
(53, 'Gwalior', 1, 15, '2023-05-17', '2023-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'India', '2023-04-09', '2023-04-15', '1'),
(2, 'Japan', '2023-04-09', '2023-04-15', '1'),
(13, 'France', '2023-04-20', '2023-04-20', '1'),
(14, 'UK', '2023-04-20', '2023-04-24', '1'),
(15, 'Australia', '2023-04-24', '2023-04-27', '1'),
(19, 'Germany', '2023-05-11', '2023-05-11', '1'),
(20, 'Canada', '2023-05-13', '2023-05-13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `license_no` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(150) NOT NULL,
  `aadhaar_no` varchar(150) NOT NULL,
  `pan_no` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`id`, `name`, `license_no`, `dob`, `gender`, `aadhaar_no`, `pan_no`, `created_on`, `updated_on`, `status`) VALUES
(3, 'Ashvani', '452353534', '1995-03-30', 'Male', '235534534534', '35454534534', '2023-04-26', '2023-04-29', '1'),
(4, 'Dev Ashish', '12345', '1995-09-04', 'Male', '123456789000', '12345', '2023-04-29', '2023-04-29', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`id`, `name`, `email`, `subject`, `message`, `created_on`, `status`) VALUES
(1, 'Akash', 'abharti197@gmail.com', 'Delivery', 'I want Delivery of a car on 27th of may', '2023-05-01', '1'),
(11, 'Ashish', 'ashish@info.com', 'Delivery', 'I need delivery of a car', '2023-05-11', '1'),
(12, 'Akash', 'akash.info@etransport.com', 'Delivery', 'I need delivery of goods and distance will be approx 100km', '2023-05-18', '1'),
(13, 'Vikash Yadav', 'vikashmajra0@gmail.com', 'Delivery of tiles', 'I need delivery of tiles for home on 15 July, 2023.', '2023-06-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `name`, `country_id`, `state_id`, `city_id`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Rewari', 1, 1, 1, '2023-04-23', '2023-05-17', '1'),
(3, 'Juhu', 1, 2, 10, '2023-04-24', '2023-04-24', '1'),
(5, 'Bawal', 1, 1, 1, '2023-05-01', '2023-05-01', '1'),
(6, 'Meerpur', 1, 1, 1, '2023-05-06', '2023-05-06', '1'),
(7, 'Dharuhera', 1, 1, 1, '2023-05-17', '2023-05-17', '1'),
(8, 'DLF Phase 1', 1, 1, 2, '2023-05-17', '2023-05-17', '1'),
(9, 'IMT Manesar', 1, 1, 2, '2023-05-17', '2023-05-17', '1'),
(10, 'Sector 9', 1, 1, 17, '2023-05-17', '2023-05-17', '1'),
(11, 'Palwal', 1, 1, 17, '2023-05-17', '2023-05-17', '1'),
(12, 'Pali', 1, 1, 17, '2023-05-17', '2023-05-17', '1'),
(13, 'Anwal', 1, 1, 19, '2023-05-17', '2023-05-17', '1'),
(14, 'Asan', 1, 1, 19, '2023-05-17', '2023-05-17', '1'),
(15, 'Bahali Anandpur', 1, 1, 19, '2023-05-17', '2023-05-17', '1'),
(16, 'Hisar 1', 1, 1, 20, '2023-05-17', '2023-05-17', '1'),
(17, 'Hisar 2', 1, 1, 20, '2023-05-17', '2023-05-17', '1'),
(18, 'Narnaund', 1, 1, 20, '2023-05-17', '2023-05-17', '1'),
(19, 'Ambala Cantonment', 1, 1, 21, '2023-05-17', '2023-05-17', '1'),
(20, 'Barara', 1, 1, 21, '2023-05-17', '2023-05-17', '1'),
(21, 'Pinjore', 1, 1, 22, '2023-05-17', '2023-05-17', '1'),
(22, 'Peer Muchalla', 1, 1, 22, '2023-05-17', '2023-05-17', '1'),
(23, 'Marine Drive', 1, 2, 10, '2023-05-17', '2023-05-17', '1'),
(24, 'Kalyan', 1, 2, 11, '2023-05-17', '2023-05-17', '1'),
(25, 'Baner Road', 1, 2, 27, '2023-05-17', '2023-05-17', '1'),
(26, 'Abhyankar Nagar', 1, 2, 28, '2023-05-17', '2023-05-17', '1'),
(27, 'Satupur', 1, 2, 29, '2023-05-17', '2023-05-17', '1'),
(28, 'Hazratganj', 1, 3, 23, '2023-05-17', '2023-05-17', '1'),
(29, 'Civil Lines', 1, 3, 24, '2023-05-17', '2023-05-17', '1'),
(30, 'Katra', 1, 3, 25, '2023-05-17', '2023-05-17', '1'),
(31, ' Pratap Pura', 1, 3, 26, '2023-05-17', '2023-05-17', '1'),
(32, 'Mylapore', 1, 5, 30, '2023-05-17', '2023-05-17', '1'),
(33, 'Kaniyur', 1, 5, 31, '2023-05-17', '2023-05-17', '1'),
(34, 'Salem West', 1, 5, 32, '2023-05-17', '2023-05-17', '1'),
(35, ' Anjuna', 1, 8, 33, '2023-05-17', '2023-05-17', '1'),
(36, 'Britona', 1, 8, 34, '2023-05-17', '2023-05-17', '1'),
(37, 'Arpora', 1, 8, 35, '2023-05-17', '2023-05-17', '1'),
(38, 'MG Marg', 1, 9, 36, '2023-05-17', '2023-05-17', '1'),
(39, 'Yangtey Town', 1, 9, 37, '2023-05-17', '2023-05-17', '1'),
(40, ' Assangthang', 1, 9, 38, '2023-05-17', '2023-05-17', '1'),
(41, 'Ashram Road', 1, 10, 39, '2023-05-17', '2023-05-17', '1'),
(42, 'Vesu', 1, 10, 40, '2023-05-17', '2023-05-17', '1'),
(43, 'Mandvi', 1, 10, 41, '2023-05-17', '2023-05-17', '1'),
(44, 'Arya Nagar', 1, 10, 42, '2023-05-17', '2023-05-17', '1'),
(45, 'Marathahalli', 1, 11, 43, '2023-05-17', '2023-05-17', '1'),
(46, 'Bannur', 1, 11, 44, '2023-05-17', '2023-05-17', '1'),
(47, 'Murankeri', 1, 11, 45, '2023-05-17', '2023-05-17', '1'),
(48, 'Jubbal', 1, 14, 46, '2023-05-17', '2023-05-17', '1'),
(49, 'Kasauli', 1, 14, 47, '2023-05-17', '2023-05-17', '1'),
(50, 'Naggar Road', 1, 14, 48, '2023-05-17', '2023-05-17', '1'),
(51, 'Baijnath', 1, 14, 49, '2023-05-17', '2023-05-17', '1'),
(52, 'Badnagar', 1, 15, 50, '2023-05-17', '2023-05-17', '1'),
(53, 'Khandwa Road', 1, 15, 51, '2023-05-17', '2023-05-17', '1'),
(54, 'Arera Colony', 1, 15, 52, '2023-05-17', '2023-05-17', '1'),
(55, 'New Balwant Nagar', 1, 15, 53, '2023-05-17', '2023-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_make`
--

CREATE TABLE `tbl_make` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_make`
--

INSERT INTO `tbl_make` (`id`, `name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Mahindra', '2023-04-26', '2023-04-26', '1'),
(2, 'Tata', '2023-04-26', '2023-04-26', '1'),
(3, 'Eicher', '2023-04-26', '2023-05-11', '1'),
(7, 'Ashok', '2023-04-27', '2023-05-11', '1'),
(10, 'Hindustan', '2023-05-11', '2023-05-11', '1'),
(11, 'Force', '2023-05-11', '2023-05-11', '1'),
(12, 'Bharat Benz', '2023-05-11', '2023-05-11', '1'),
(13, 'Volvo', '2023-05-11', '2023-05-11', '1'),
(14, 'Swaraj Mazda', '2023-05-11', '2023-05-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'XL', '2023-04-26', '2023-05-11', '1'),
(2, 'Mega', '2023-04-26', '2023-05-11', '1'),
(7, 'Mega XL', '2023-05-06', '2023-05-11', '1'),
(8, 'Ecomet', '2023-05-11', '2023-05-11', '1'),
(9, 'Partner 6', '2023-05-11', '2023-05-19', '1'),
(10, '5525', '2023-05-11', '2023-05-11', '1'),
(11, 'BOSS', '2023-05-11', '2023-05-11', '1'),
(12, 'Furio 17', '2023-05-11', '2023-05-11', '1'),
(13, 'Furio 16', '2023-05-11', '2023-05-11', '1'),
(14, 'Pikup', '2023-05-11', '2023-05-11', '1'),
(15, 'Profit', '2023-05-11', '2023-05-11', '1'),
(16, '2049', '2023-05-11', '2023-05-11', '1'),
(17, '3015', '2023-05-11', '2023-05-11', '1'),
(18, '3019', '2023-05-11', '2023-05-11', '1'),
(19, 'Trump 40', '2023-05-11', '2023-05-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subs_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `email`, `subs_on`) VALUES
(12, 'abharti197@gmail.com', '2023-05-09'),
(18, 'vikash123@gmail.com', '2023-05-11'),
(19, 'ashish123@gmail.com', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `package_name`, `price`, `description`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Basic', '1000', 'Easy Pickup and Delivery of your goods at your Doorstep', '2023-05-01', '2023-05-04', '1'),
(2, 'Premiun', '2000', 'Load and Unload along with Pickup and Delivery', '2023-05-01', '2023-05-04', '1'),
(3, 'Business', '5000', 'Packing and Unpacking, Load and Unload along with Pickup and Delivery ', '2023-05-01', '2023-05-04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quote`
--

CREATE TABLE `tbl_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quote`
--

INSERT INTO `tbl_quote` (`id`, `name`, `email`, `service`, `created_on`, `status`) VALUES
(36, 'Ashvani', 'ashish@info.com', 'Ocean Freight', '2023-05-04', '1'),
(37, 'Ashvani', 'ashish@info.com', 'Ocean Freight', '2023-05-04', '1'),
(38, 'Ashvani', 'ashish@info.com', 'Air Freigh', '2023-05-06', '1'),
(39, 'Ashvani', 'ashish@info.com', 'Air Freigh', '2023-05-07', '1'),
(40, 'Ashvani', 'prakhar@info.com', 'Land Transport', '2023-05-09', '1'),
(41, 'Akash', 'abharti197@gmail.com', 'Land Transport', '2023-05-10', '1'),
(46, 'Dev', 'dev123@gmail.com', 'Ocean Freight', '2023-05-18', '1'),
(47, 'Ashish', 'ashish123@gmail.com', 'Cargo Storage', '2023-06-03', '1'),
(48, 'Akash', 'abharti197@gmail.com', 'Ocean Freight', '2023-06-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `name`, `country_id`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Haryana', 1, '2023-04-09', '2023-04-15', '1'),
(2, 'Maharastra', 1, '2023-04-10', '2023-04-15', '1'),
(3, 'Uttar Pradesh', 1, '2023-04-11', '2023-04-24', '1'),
(5, 'Tamil Nadu', 1, '2023-04-20', '2023-04-24', '1'),
(7, 'Hokkaido', 2, '2023-04-24', '2023-04-24', '1'),
(8, 'Goa', 1, '2023-04-24', '2023-04-24', '1'),
(9, 'Sikkim', 1, '2023-04-24', '2023-04-24', '1'),
(10, 'Gujrat', 1, '2023-04-24', '2023-04-24', '1'),
(11, 'Karnataka', 1, '2023-04-24', '2023-04-24', '1'),
(12, 'Corsica', 13, '2023-04-29', '2023-04-29', '1'),
(13, 'Tokyo', 2, '2023-05-10', '2023-05-10', '1'),
(14, 'Himachal Pradesh', 1, '2023-05-17', '2023-05-17', '1'),
(15, 'Madhya Pradesh', 1, '2023-05-17', '2023-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `profile_photo` varchar(250) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `profession`, `description`, `profile_photo`, `created_on`, `updated_on`, `status`) VALUES
(2, 'VIkash', 'Chief Strategy Officer', 'I have used several transport websites in the past, but this one is by far the best. This is easy to navigate and customer service team is responsive and knowledgeable.', 'usr_2305040738352vikash.jpg', '2023-05-02', '2023-05-11', '1'),
(3, 'Ashvani', 'General Counsel', 'I was skeptical at first, but this transport company exceeded my expectations. The driver was friendly and knowledgeable, and the vehicle was clean and comfortable.', 'usr_2305040738563ashvani.jpg', '2023-05-03', '2023-05-11', '1'),
(4, 'Sidharth', 'Chief Technology Officer', 'This company truly goes above and beyond for their customers. They were able to accommodate my last-minute booking and provided me with a  upgrade to a larger vehicle.', 'usr_2305040739054sidharth.jpg', '2023-05-03', '2023-05-11', '1'),
(5, 'Mohit', 'Board Of Directors', 'I have used this company multiple times now, and I am always impressed by their level of service. The vehicles are top-notch, and the drivers are professional and friendly.', 'usr_2305040739155mohit.jpg', '2023-05-03', '2023-05-11', '1'),
(6, 'Ashish', 'Officer', 'I had an amazing experience with this transport company! They were prompt, professional, and courteous throughout the entire process  from booking to arriving at destination.', 'usr_2305040739246ashish.jpg', '2023-05-03', '2023-05-11', '1'),
(7, 'Akash', 'Chairman', 'The transport listings are organized in a way that makes it simple to find the right service for my needs. I would highly recommend this transport website to anyone in need', 'usr_2305110219157akash.jpg', '2023-05-11', '2023-05-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport`
--

CREATE TABLE `tbl_transport` (
  `id` int(11) NOT NULL,
  `business_name` varchar(150) NOT NULL,
  `gst` varchar(150) NOT NULL,
  `pan` varchar(150) NOT NULL,
  `owner_name` varchar(150) NOT NULL,
  `owner_email` varchar(150) NOT NULL,
  `owner_mobile` varchar(150) NOT NULL,
  `start_time` varchar(150) NOT NULL,
  `end_time` varchar(150) NOT NULL,
  `working_days` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL,
  `transport_mobile` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `land_mark` varchar(150) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transport`
--

INSERT INTO `tbl_transport` (`id`, `business_name`, `gst`, `pan`, `owner_name`, `owner_email`, `owner_mobile`, `start_time`, `end_time`, `working_days`, `email`, `website`, `transport_mobile`, `address`, `land_mark`, `country_id`, `state_id`, `city_id`, `location_id`, `logo`, `cover`, `short_description`, `long_description`, `created_on`, `updated_on`, `featured`, `status`) VALUES
(3, 'Vikash Transport Services', 'ABC53424', 'CGD3EPDSD', 'Vikash', 'vikash123@gmail.com', '8168134342', '09:00', '18:00', 'Mon/Fri', 'info@vikashtr.com', 'www.vikashtr.com', '989612231', 'Plot No. 2', 'Sector 4 Gate', 1, 5, 31, 33, 'usr_2305170813323BSH-Transport.jpg', 'usr_2305170812173Tata_Motors_Commercial_Vehicle_Launch_1635413066291_1635413084819.jpeg', 'Vikas Transport Service is a professional transport company that offers reliable and efficient transportation solutions for individuals and businesses. With a fleet of well-maintained vehicles and experienced drivers, Vikas Transport Service is committed to delivering excellent customer service and ensuring the safe and timely delivery of goods and passengers to their destinations.', ' With a fleet of well-maintained vehicles and experienced drivers, Vikash Transport Service is committed to delivering excellent customer service and ensuring the safe and timely delivery of goods and passengers to their destinations. Whether you need to transport goods, materials, or people across the city or across the country, Vikash Transport Service has the expertise and resources to meet your transportation needs.\r\n<br>\r\n<br>\r\n With a fleet of well-maintained vehicles and experienced drivers, Vikas Transport Service is committed to delivering excellent customer service and ensuring the safe and timely delivery of goods and passengers to their destinations. Whether you need to transport goods, materials, or people across the city or across the country, Vikash Transport Service has the expertise and resources to meet your transportation needs.\r\n<br>\r\n<br>\r\n With a fleet of well-maintained vehicles and experienced drivers, Vikas Transport Service is committed to delivering excellent customer service and ensuring the safe and timely delivery of goods and passengers to their destinations. Whether you need to transport goods, materials, or people across the city or across the country, Vikash Transport Service has the expertise and resources to meet your transportation needs.', '2023-05-05', '2023-05-17', 1, '1'),
(8, 'Ashvani Transport', 'ABC53424', 'CZTPA4567R', 'Ashvani', 'ashvani123@gmai.com', '8168134342', '10:00', '20:30', 'Mon/Sat', 'info@ashtrport.com', 'www.ashtrport.com', '8168536732', 'Plot No. 2', 'Sector 4 Gate', 1, 3, 25, 30, 'usr_2305170816388trucks-row-container.jpg', 'usr_2305170816388photo-1544620347-c4fd4a3d5957.jpg', 'Ashvani Transports is a reliable and efficient transportation service provider that offers a wide range of transportation solutions to businesses and individuals. They specialize in providing transportation services for various industries, including agriculture, construction, manufacturing, and more.', 'Ashvani Transports is a leading transportation service provider that offers reliable and efficient logistics solutions for businesses and individuals. With a strong focus on customer satisfaction, Ashvani Transports has built a reputation for delivering goods on time and in perfect condition.\r\n<br>\r\n<br>\r\nThe company has a modern fleet of vehicles that are well-maintained and equipped with state-of-the-art technology to ensure safe and secure transportation of goods. From small parcels to large cargo shipments, Ashvani Transports has the capacity and expertise to handle any transportation requirement.\r\n<br>\r\n<br>\r\nAshvani Transports offers a range of transportation services, including full truckload, less-than-truckload, intercity, and intracity transportation. The company also provides value-added services such as warehousing, packaging, and custom clearance to help customers streamline their logistics operations.\r\n<br>\r\n<br>\r\nThe team at Ashvani Transports is highly experienced and well-trained to handle all aspects of transportation, including route planning, tracking, and customer service. The company has a robust quality control system in place to ensure that every shipment is handled with the utmost care and attention.\r\n\r\n', '2023-05-06', '2023-05-17', 1, '1'),
(9, 'SwiftHaul Transport', 'BFHT34643', 'CZTPA4567R', 'Dev', 'dev123@gmail.com', '9896111111', '10:00', '18:00', 'Mon/Fri', 'info@swifthaul.com', 'www.swifthaul.com', '9896121221', 'PLot No. 12', 'Sector 4 Gate', 1, 5, 31, 33, 'usr_2305170228369Untitled.jpg', 'usr_230517022836920151229190117-road-commercial-vehicle-company-truck-car-driving-transporter-transportation-cargo-highway-business-delivery-.jpeg', 'SwiftHaul Transport is a dynamic and reliable transport company that specializes in the efficient movement of goods and materials. With a focus on speed and reliability, SwiftHaul Transport offers a comprehensive range of transportation services to meet the diverse needs of businesses and individuals alike.', 'Our team of experienced drivers and logistics experts are dedicated to ensuring that your goods are transported swiftly and securely to their destination. We understand the importance of timely deliveries and strive to exceed our customers\' expectations with our prompt and efficient services.\r\n<br><br>\r\nAt SwiftHaul Transport, we pride ourselves on our commitment to exceptional customer service. We work closely with our clients to understand their specific requirements and tailor our transportation solutions accordingly. Whether you need local or long-distance transport, full truckload or less-than-truckload shipments, our fleet of well-maintained vehicles and state-of-the-art tracking systems ensure that your cargo is in safe hands throughout the journey.\r\n<br><br>\r\nWe prioritize safety and adhere to the highest industry standards in all our operations. Our drivers are licensed professionals who undergo regular training to stay updated on the latest safety practices. With SwiftHaul Transport, you can have peace of mind knowing that your goods are being transported with utmost care and attention to detail.\r\n<br><br>\r\nOur commitment to sustainability is another aspect that sets us apart. We continuously strive to minimize our environmental footprint by adopting eco-friendly practices and investing in fuel-efficient vehicles. By choosing SwiftHaul Transport, you are not only benefiting from our reliable services but also contributing to a greener future.\r\n<br><br>\r\nWhether you are a small business owner, a large corporation, or an individual with transportation needs, SwiftHaul Transport is here to provide you with a seamless and hassle-free transport experience. With our dedication to speed, reliability, and customer satisfaction, we are the preferred choice for all your transportation needs. Contact SwiftHaul Transport today and let us take care of your cargo with efficiency and professionalism.', '2023-05-17', '2023-05-17', 1, '1'),
(10, 'MetroMover Logistics', 'BCDF34643', 'CZTPA4567R', 'Ashish', 'ashish123@gmail.com', '9896111234', '08:00', '20:00', 'Mon/Sat', 'info@metromover.com', 'www.metromover.com', '9896122311', 'Plot No. 02', 'Hanuman Mandir', 1, 2, 10, 3, 'usr_23051706574010Seafield-Park-Transport-1.jpg', 'usr_23051706574010photo-1519003722824-194d4455a60c.jpg', 'MetroMover Logistics is a dynamic and reliable transport company that excels in providing efficient and seamless transportation solutions. With a focus on metropolitan areas and urban regions, MetroMover Logistics specializes in the swift movement of goods, ensuring timely and secure deliveries.', 'At MetroMover Logistics, we understand the fast-paced nature of urban environments and the need for streamlined logistics. We pride ourselves on offering a comprehensive range of transport services, including last-mile deliveries, warehousing, distribution, and supply chain management. Our goal is to optimize the transportation process, eliminating bottlenecks and ensuring maximum efficiency.\r\n<br><br>\r\nWith a fleet of modern vehicles and a team of experienced professionals, MetroMover Logistics is equipped to handle diverse cargo types and sizes. Whether it\'s small packages, pallets, or bulk shipments, we have the resources and expertise to meet your transportation needs. Our drivers are skilled and knowledgeable, navigating through congested city streets with precision and care, ensuring that your goods arrive at their destination intact and on time.\r\n<br><br>\r\nReliability and customer satisfaction are at the core of our values. We prioritize open communication with our clients, providing real-time tracking and updates on shipments, so you can have peace of mind knowing where your goods are throughout the transportation process. Our commitment to exceptional service extends beyond transportation; we aim to build long-lasting partnerships by understanding your specific requirements and tailoring our solutions accordingly.\r\n<br><br>\r\nMetroMover Logistics also places a strong emphasis on sustainability. We actively seek eco-friendly practices, optimizing routes, and employing fuel-efficient vehicles to reduce our carbon footprint. By choosing MetroMover Logistics, you not only benefit from efficient and reliable transportation services but also contribute to a greener future.\r\n<br><br>\r\nWhether you are a small business, e-commerce retailer, or a large corporation, MetroMover Logistics is your trusted partner in urban transportation. We strive to exceed expectations, delivering seamless logistics solutions that empower your business to thrive in a fast-paced, metropolitan environment.', '2023-05-17', '2023-05-17', 0, '1'),
(11, 'ProTrans Express', 'BFHT34643', 'CGD3EPDSD', 'Sidharth', 'sidharth123@gmail.com', '9896111234', '11:00', '18:00', 'Mon/Fri', 'info.protrans.com', 'www.protrans.com', '9896121221', 'PLot No. 12', 'Gate No 4', 1, 3, 25, 30, 'usr_23051707035411car-transport-australia-1001x565.jpg', 'usr_23051707035411istockphoto-1286945199-612x612.jpg', 'ProTrans Express is a leading transport company dedicated to providing efficient and reliable transportation solutions. With a strong commitment to customer satisfaction and a track record of excellence, ProTrans Express has established itself as a trusted name in the industry.', 'Our mission is to seamlessly connect businesses with their supply chain needs, offering a comprehensive range of transport services tailored to meet the unique requirements of our clients. Whether it\'s local or long-distance transportation, ProTrans Express has the expertise and resources to handle it all.\r\n<br><br>\r\nAt ProTrans Express, we prioritize punctuality, safety, and professionalism in every aspect of our operations. We boast a team of highly skilled and experienced drivers who are dedicated to ensuring the timely delivery of goods while adhering to the highest safety standards. Our fleet of well-maintained vehicles is equipped with the latest tracking technology, allowing us to provide real-time updates on shipment status.\r\n<br><br>\r\nWe understand that each client has specific logistical challenges, which is why we offer personalized solutions to address their unique needs. From efficient route planning to specialized handling requirements, ProTrans Express goes above and beyond to ensure a seamless and hassle-free transportation experience.\r\n<br><br>\r\nOur commitment to environmental sustainability sets us apart from the competition. ProTrans Express embraces eco-friendly practices and employs fuel-efficient vehicles, reducing our carbon footprint while contributing to a greener future.\r\n<br><br>\r\nWhen you choose ProTrans Express as your transportation partner, you can expect exceptional service, transparent communication, and a strong dedication to meeting deadlines. We take pride in being a reliable and trusted ally in the success of your business.\r\n<br><br>\r\nExperience the difference with ProTrans Express, where quality, reliability, and customer satisfaction are at the heart of everything we do.', '2023-05-17', '2023-05-17', 0, '1'),
(12, 'RoadRunner Freight', 'BFHT34623', 'CGD3EPDSD', 'Yogesh', 'yogesh123@gmail.com', '9896111111', '08:30', '08:00', 'All Days', 'info@roadrunner.com', 'www.roadrunner.com', '9896121221', 'Shop No 32', 'Circular Road', 1, 8, 34, 36, 'usr_23051707130012MSC20003552.jpg', 'usr_23051707130012istockphoto-1266958681-612x612.jpg', 'RoadRunner Freight is a reputable and dynamic transport company that prides itself on delivering efficient and reliable shipping solutions to businesses and individuals. With a name inspired by the legendary speed and agility of the roadrunner bird, this company stands out for its commitment to swift and on-time deliveries.', 'At RoadRunner Freight, we understand the importance of timeliness and precision in the transportation industry. We specialize in providing a wide range of freight services, including both local and long-distance haulage. Whether it\'s small packages, large shipments, or specialized cargo, our experienced team ensures that every item reaches its destination securely and promptly.\r\n<br><br>\r\nOur company boasts a fleet of modern, well-maintained vehicles that are equipped with the latest tracking technology. This allows us to monitor shipments in real-time, providing our clients with accurate updates and peace of mind throughout the transportation process. We take pride in our skilled drivers who are not only experts on the road but also prioritize safety and professionalism.\r\n<br><br>\r\nRoadRunner Freight values strong relationships with its clients and strives to offer exceptional customer service. We understand that each business has unique shipping requirements, and our dedicated team works closely with clients to develop customized solutions tailored to their specific needs. With our commitment to reliability, transparency, and open communication, we aim to build long-term partnerships based on trust and mutual success.\r\n<br><br>\r\nAs a responsible transport company, we prioritize sustainability and eco-friendly practices. We continuously explore innovative ways to reduce our carbon footprint and contribute to a greener future. By leveraging optimized routes, efficient fuel consumption, and smart logistics planning, we minimize the environmental impact of our operations.', '2023-05-17', '2023-05-17', 0, '1'),
(13, 'EliteTran Solutions', 'ABC53424', 'CGD3EPDSD', 'Mohit', 'mohit123@gmail.com', '9896111234', '09:00', '17:00', 'All Days', 'info@elitetran.com', 'www.elitetran.com', '9896121221', 'Plot No. 2', 'Gate No 4', 1, 10, 41, 43, 'usr_23051707163413logistics-business-780x470.jpg', 'usr_23051707163413logistic-770x433.jpeg', 'EliteTran Solutions is a premier transport company that offers top-notch transportation solutions for businesses and individuals alike. With a commitment to excellence and a focus on customer satisfaction, EliteTran Solutions sets itself apart in the industry. Our team of highly trained professionals understands the importance of timely and reliable transportation services. Whether it\'s local or long-distance hauling, logistics management, or freight forwarding.', 'EliteTran Solutions delivers with precision and efficiency. We pride ourselves on our ability to handle diverse transportation needs, catering to a wide range of industries such as retail, manufacturing, e-commerce, and more.\r\n<br><br>\r\nAt EliteTran Solutions, we prioritize safety and security as paramount concerns. Our fleet of modern, well-maintained vehicles is equipped with cutting-edge technology and undergoes regular inspections to ensure optimal performance and adherence to industry standards. We employ skilled drivers who are experienced in handling various types of cargo, providing peace of mind to our clients.\r\n<br><br>\r\nCustomer satisfaction is at the heart of our business philosophy. We believe in building strong, long-term relationships with our clients, and we achieve this through open communication, personalized service, and a commitment to meeting and exceeding expectations. Our dedicated customer support team is available 24/7 to address any concerns, provide real-time updates, and ensure a seamless transportation experience.\r\n<br><br>\r\nAs a socially responsible company, EliteTran Solutions also embraces sustainable practices. We actively seek out eco-friendly solutions, implementing fuel-efficient technologies and optimizing routes to minimize our carbon footprint. We understand the importance of protecting the environment and strive to contribute to a greener future.\r\n<br><br>\r\nWhen you choose EliteTran Solutions, you\'re choosing a transport partner that delivers reliability, professionalism, and a dedication to excellence. Experience the difference of our elite transportation services and let us handle your logistics needs with the utmost care and precision.', '2023-05-17', '2023-05-17', 0, '1'),
(14, 'Transporto Prime', 'BCFD34643', 'CGD3EPDSD', 'Ashish', 'ashish123@gmail.com', '9896111111', '09:00', '18:00', 'Mon/Sat', 'info@transporto.com', 'www.transporto.com', '9896122311', 'Mahajan Complex', 'Gate No 4', 1, 3, 24, 29, 'usr_23051707205814depositphotos_6057970-sto.jpg', 'usr_23051707205814desktop-wallpaper-logistics.jpg', 'Transporto Prime is a premier transport company dedicated to providing reliable and efficient transportation solutions. With a commitment to excellence, Transporto Prime has established itself as a trusted name in the industry, catering to a diverse range of clients and their unique logistics needs.', 'At Transporto Prime, we prioritize customer satisfaction above all else. We understand the importance of timeliness and reliability in the transportation industry, and we strive to deliver every shipment promptly and securely. Our team of skilled professionals is well-versed in managing logistics and ensuring seamless coordination from pick-up to delivery.\r\n<br><br>\r\nOne of our core strengths is our extensive network of transportation resources. Whether it\'s road, rail, air, or sea transport, Transporto Prime has the capabilities and partnerships to handle any type of cargo, from small packages to oversized freight. We take pride in our ability to offer flexible and scalable transport solutions, tailored to meet the specific requirements of each client.\r\n<br><br>\r\nSafety is paramount in our operations. Transporto Prime maintains a fleet of well-maintained vehicles equipped with advanced tracking systems, ensuring the security and integrity of every shipment. Our drivers undergo rigorous training, adhering to strict safety protocols and regulations to guarantee the smooth transportation of goods while minimizing risks.\r\n<br><br>\r\nAdditionally, we leverage the latest technological advancements to streamline our processes and enhance transparency for our clients. Our state-of-the-art tracking and monitoring systems allow real-time updates on shipment progress, providing peace of mind and valuable insights into the logistics chain.\r\n<br><br>\r\nTransporto Prime prides itself on fostering long-term relationships with our clients. We believe in open communication, personalized service, and a proactive approach to problem-solving. Our dedicated customer support team is available round the clock, offering assistance, resolving inquiries, and ensuring a smooth experience for every client.', '2023-05-17', '2023-05-17', 0, '1'),
(15, 'StellarTrans Cargo', 'BFHT34643', 'CGD3EPDSD', 'Preeti', 'preeti123@gmail.com', '9896111111', '09:30', '17:30', 'Mon/Fri', 'info@sellartrans.com', 'www.sellartrans.com', '9896122311', 'Plot No. 2', 'Railway Station', 1, 1, 2, 9, 'usr_23051707263115container-cargo-ship-g.jpg', 'usr_23051707263115360_F_382940101_BjuwXRaKR0tzdsDjk5VTR0c1tjyG24J4.jpg', 'StellarTrans Cargo is a premier transport company that aims to provide exceptional logistical solutions to businesses and individuals alike. With a focus on reliability, efficiency, and customer satisfaction, StellarTrans Cargo is committed to delivering goods and products seamlessly across various destinations.', 'At StellarTrans Cargo, we understand that time is of the essence in the fast-paced world of logistics. That\'s why we have built a strong reputation for our prompt and timely deliveries. Whether it\'s local, regional, or international transportation, our well-maintained fleet of vehicles and experienced team of drivers ensure that your cargo reaches its destination safely and on schedule.\r\n<br><br>\r\nOne of the key pillars of our business is reliability. We pride ourselves on offering consistent and dependable services, eliminating the stress and uncertainties often associated with transportation. Our dedicated staff carefully coordinates each step of the process, from pickup to delivery, ensuring that your cargo is handled with the utmost care and attention.\r\n<br><br>\r\nWe believe in fostering strong relationships with our clients by providing personalized solutions that meet their unique requirements. StellarTrans Cargo offers a wide range of services, including freight forwarding, warehousing, distribution, and supply chain management. Our team of logistics experts works closely with clients to design tailored solutions that optimize efficiency and reduce costs.\r\n<br><br>\r\nSafety is a top priority at StellarTrans Cargo. We adhere to stringent safety standards and employ advanced tracking technologies to monitor the progress of your cargo throughout its journey. Our commitment to safety extends not only to the goods we transport but also to our drivers and employees, ensuring a secure and reliable service at all times.\r\n<br><br>\r\nAs a forward-thinking company, StellarTrans Cargo embraces innovation and leverages the latest technologies to streamline operations. We utilize advanced logistics software and data analytics to optimize routes, minimize transit times, and enhance overall efficiency. By staying at the forefront of industry trends and adopting innovative practices, we continuously strive to exceed customer expectations.', '2023-05-17', '2023-05-17', 0, '1'),
(16, 'Transcend Transport Solutions', 'ABC53424', 'CGD3EPDSD', 'Prakhar', 'prakhar123@gmail.com', '9896111234', '10:00', '17:00', 'Mon/Sat', 'info@trtransport.com', 'www.trtransport.com', '9896122311', 'Plot No. 23', 'Railway Station', 1, 3, 24, 29, 'usr_23051707312616kendall-henderson-pj6.jpg', 'usr_23051707312616trailer-truck-transportation-trailer-truck-wallpaper-preview.jpg', 'Transcend Transport Solutions is a dynamic and innovative transport company that goes beyond conventional transportation services. With a strong commitment to reliability, efficiency, and customer satisfaction, Transcend Transport Solutions aims to exceed expectations and elevate the standards of the industry.', 'At Transcend Transport Solutions, we understand the vital role transportation plays in connecting businesses and individuals across various locations. We offer a comprehensive range of transport services designed to cater to diverse needs and ensure seamless movement of goods and people.\r\n<br><br>\r\nOur team of experienced professionals is dedicated to providing exceptional service, employing the latest technologies, and employing industry best practices. We take pride in our attention to detail and prioritize safety, punctuality, and cost-effectiveness. Whether it\'s local deliveries, long-haul transportation, or specialized logistics solutions, we have the expertise and resources to handle it all.\r\n<br><br>\r\nTranscend Transport Solutions stands out from the competition through its commitment to sustainability and environmental stewardship. We prioritize eco-friendly practices and employ fuel-efficient vehicles, optimize routes to minimize emissions, and actively explore innovative solutions to reduce our carbon footprint.\r\n<br><br>\r\nWhat sets us apart is our personalized approach to customer service. We understand that each client has unique requirements, and we take the time to listen, collaborate, and tailor our solutions accordingly. Our dedicated customer support team is available 24/7, ensuring prompt assistance and real-time updates on the status of shipments.\r\n<br><br>\r\nWhen you choose Transcend Transport Solutions, you can rest assured that your goods are in capable hands. We strive to create lasting partnerships with our clients, built on trust, reliability, and exceptional service. Experience the difference with Transcend Transport Solutions, where we transcend expectations and redefine excellence in transport services.', '2023-05-17', '2023-05-17', 1, '1'),
(17, 'CargoWave Express', 'BFHT34623', 'CGD3EPDSD', 'Akash', 'akash123@gmail.com', '8168134342', '09:00', '19:00', 'All Days', 'info@cargowave.com', 'www.cargowave.com', '9896122311', 'Building 1', 'Hanuman Mandir', 1, 1, 1, 1, 'usr_23051707371317istockphoto-1273907202-612x612.jpg', 'usr_23051707371317360_F_246171210_f0azQ2cqGPBT3NfzpzcBw7Mw1mj4X2a2.jpg', 'CargoWave Express is a dynamic and reliable transport company that specializes in providing efficient and secure logistics solutions. Our commitment to excellence and customer satisfaction sets us apart in the industry, making us the preferred choice for businesses and individuals looking for seamless transportation services.', 'At CargoWave Express, we understand the importance of timely and safe delivery of goods. Whether you need to transport small parcels, oversized cargo, or sensitive materials, our team of highly skilled professionals ensures that your items reach their destination in pristine condition and on schedule. We pride ourselves on our ability to handle complex logistical challenges with precision and expertise.\r\n<br><br>\r\nOur company operates with a fleet of state-of-the-art vehicles equipped with advanced tracking systems and security features. This allows us to provide real-time updates on the location and status of your consignment, giving you peace of mind and complete visibility throughout the transportation process.\r\n<br><br>\r\nWe have forged strong partnerships with reliable carriers and logistics providers worldwide, enabling us to offer comprehensive transportation solutions for both domestic and international shipments. Our extensive network ensures that we can efficiently navigate through various transportation routes, customs regulations, and paperwork requirements, minimizing delays and optimizing cost-effectiveness.\r\n<br><br>\r\nCargoWave Express is committed to sustainable practices and minimizing our environmental impact. We prioritize eco-friendly initiatives, such as optimizing routes to reduce fuel consumption and implementing innovative technologies to promote energy efficiency in our operations.\r\n<br><br>\r\nWhat sets us apart is our unwavering dedication to personalized service. Our knowledgeable and friendly customer support team is available around the clock to address any inquiries or concerns you may have. We believe in building long-lasting relationships with our clients, understanding their unique needs, and tailoring our services accordingly.', '2023-05-17', '2023-05-17', 1, '1'),
(18, 'Transcendence Movers', 'TGSDA34643', 'CGD3CS45S', 'Kirti', 'kirti123@gmail.com', '8168134342', '07:00', '16:00', 'All Days', 'info@transcendence.com', 'www.transcendence.com', '8168536732', 'Building No 45', 'Railway Station', 1, 10, 40, 42, 'usr_23051707424618GettyImages-115652862.jpg', 'usr_23051707424618csm_23DT021_002_42e3b4930f.jpg', 'Transcendence Movers is a forward-thinking and innovative transport company that goes above and beyond to exceed customer expectations. With a commitment to excellence and a passion for seamless logistics, Transcendence Movers aims to elevate the moving experience to new heights.', 'At Transcendence Movers, we understand that moving can be a stressful and time-consuming process. That\'s why we provide a comprehensive range of services designed to make your move smooth and hassle-free. Whether you are relocating your home, office, or commercial space, our team of skilled professionals is dedicated to handling every aspect of the transportation process with utmost care and efficiency.\r\n<br><br>\r\nOur commitment to customer satisfaction is at the core of our operations. We believe in open communication and transparency, ensuring that you are well-informed and involved throughout the entire moving journey. From the initial consultation to the final delivery, we prioritize your needs and tailor our services to meet your specific requirements.\r\n<br><br>\r\nTranscendence Movers stands out from the competition by offering a combination of reliability, professionalism, and a personal touch. Our experienced and highly trained team takes pride in handling your belongings with the utmost respect and ensuring their safe arrival at the designated destination. We utilize state-of-the-art equipment and industry-leading techniques to guarantee the secure transportation of your possessions.\r\n<br><br>\r\nAs a socially responsible company, Transcendence Movers is also committed to minimizing our environmental impact. We strive to implement sustainable practices, such as optimizing route planning and utilizing fuel-efficient vehicles, to reduce our carbon footprint while still providing top-notch service.', '2023-05-17', '2023-05-17', 1, '1'),
(19, 'HorizonHaul Logistics', 'ABC53424', 'CGD3EPDSD', 'Vikash', 'vikash123@gmail.com', '8168134342', '10:00', '17:30', 'Mon/Sat', 'info@horizonhaul.com', 'www.horizonhaul.com', '8168536732', 'Model Town', 'Shiv Chowk', 1, 14, 47, 49, 'usr_23051708092419MSC20003552.jpg', 'usr_2305170753531951632_20221014-transport-and-logistics__w660__.jpg', 'HorizonHaul Logistics is a dynamic and innovative transport company that specializes in providing comprehensive logistics solutions. With a strong emphasis on efficiency, reliability, and customer satisfaction, HorizonHaul Logistics is committed to delivering exceptional transportation services tailored to meet the unique needs of businesses and individuals.', 'Our primary objective is to bridge the gap between distance and delivery by offering a wide range of transportation options. Whether it\'s local or long-distance hauling, we have the expertise and resources to handle any logistical challenge. From small parcels to oversized cargo, HorizonHaul Logistics ensures that your goods are transported securely and arrive at their destination on time.\r\n<br><br>\r\nAt HorizonHaul Logistics, we understand that each client has specific requirements. Our team of experienced professionals works closely with customers to design customized transportation solutions that align with their goals and budget. We offer flexible scheduling, real-time tracking, and transparent communication throughout the entire transport process, providing peace of mind and allowing our clients to focus on their core business operations.\r\n<br><br>\r\nSafety is our top priority. We maintain a modern fleet of well-maintained vehicles equipped with advanced tracking systems and adhere to rigorous safety standards. Our drivers are highly trained, experienced, and committed to delivering your goods safely and securely.\r\n<br><br>\r\nFurthermore, HorizonHaul Logistics embraces sustainability and eco-conscious practices. We strive to minimize our carbon footprint by optimizing routes, utilizing fuel-efficient vehicles, and implementing environmentally friendly initiatives. By choosing HorizonHaul Logistics, you can trust that your transportation needs are being met in a responsible and sustainable manner.', '2023-05-17', '2023-05-17', 1, '1'),
(20, 'ApexSwift Transportation', 'BFHT34623', 'CZTPA4567R', 'Ashvani', 'ashvani@gmai.com', '8168134342', '07:30', '18:30', 'Mon/Fri', 'info@apexswift .com', 'www.apexswift .com', '8168536732', 'Sector 21', 'Gate No 1', 1, 15, 52, 54, 'usr_23051707580320170916432-orange-big-rig-long.jpg', 'usr_23051707580320fcad3f769c61e846d7d21db03adef315.jpg', 'ApexSwift Transportation is a leading and reputable transport company dedicated to providing exceptional logistics and transportation services. With a commitment to reliability, efficiency, and customer satisfaction, ApexSwift stands out as a trusted partner for businesses and individuals in need of seamless transportation solutions.', 'At ApexSwift Transportation, we understand that timely and secure delivery of goods is crucial for our clients. Our team of highly skilled and experienced professionals ensures that every aspect of the transportation process is handled with utmost precision and care. Whether it\'s local, regional, or long-haul transportation, we have the expertise and resources to meet diverse needs.\r\n<br><br>\r\nWe pride ourselves on our modern fleet of well-maintained vehicles, equipped with advanced tracking systems and safety features, ensuring the safe and efficient transportation of goods. Our drivers undergo rigorous training and adhere to strict safety protocols, guaranteeing that cargo arrives at its destination intact and on schedule.\r\n<br><br>\r\nWith a comprehensive range of transportation services, ApexSwift caters to various industries, including manufacturing, retail, e-commerce, and more. We offer full truckload (FTL) and less-than-truckload (LTL) services, expedited shipping options, specialized transport for oversized or delicate items, and efficient warehousing and distribution solutions.\r\n<br><br>\r\nWhat sets ApexSwift Transportation apart is our commitment to personalized service. We work closely with our clients, understanding their unique requirements and tailoring our solutions accordingly. Our dedicated customer support team is available round-the-clock to address any queries or concerns, ensuring a seamless and transparent experience throughout the transportation process.', '2023-05-17', '2023-05-17', 0, '1'),
(21, 'Transpire Transport', 'ABC53424', 'CGD3EPDSD', 'Sidharth', 'sidharth123@gmail.com', '8168134342', '09:00', '19:00', 'Mon/Fri', 'info@transpirept.com', 'www.transpirept.com', '8168536732', 'Plot No. 2', 'Circular Road', 1, 2, 29, 27, 'usr_23051708034221MSC19001658_header (1).jpg', 'usr_23051708034221logistic-770x433.jpeg', 'Transpire Transport is a dynamic and innovative transport company that is committed to delivering exceptional logistics and freight solutions. With a focus on efficiency, reliability, and customer satisfaction, Transpire Transport aims to become a trusted partner for all your transportation needs.', 'At Transpire Transport, we understand that timely and secure delivery of goods is crucial for businesses to thrive in today\'s competitive market. With our state-of-the-art fleet and advanced tracking systems, we ensure that your cargo is handled with the utmost care and reaches its destination on schedule.\r\n<br><br>\r\nOur team of experienced professionals is dedicated to providing personalized services tailored to meet your unique requirements. Whether you need transportation for small packages or large-scale freight, Transpire Transport has the resources and expertise to handle it all. We pride ourselves on our attention to detail and our ability to tackle complex logistical challenges with ease.\r\n<br><br>\r\nSafety is paramount at Transpire Transport. We adhere to the highest industry standards and implement rigorous safety protocols to safeguard your cargo throughout the transportation process. Our drivers are highly trained and possess extensive knowledge of road regulations, ensuring that your goods are in reliable hands.\r\n<br><br>\r\nTranspire Transport is also committed to sustainability and reducing our environmental impact. We actively seek eco-friendly solutions, such as optimizing routes to minimize fuel consumption and utilizing energy-efficient vehicles. By choosing Transpire Transport, you can be confident that your transportation needs are being met with a responsible and environmentally conscious approach.\r\n<br><br>\r\nWith a customer-centric approach, Transpire Transport strives to build long-term relationships with our clients. We value open communication, transparency, and integrity, ensuring that you receive excellent service and support every step of the way.', '2023-05-17', '2023-05-17', 0, '1'),
(22, 'FastTrack Freight', 'BFHT34623', 'CZTPA4567R', 'Akash', 'akash123@gmail.com', '8168134342', '09:00', '20:00', 'All Days', 'info@ftfreight.com', 'www.ftfreight.com', '8168536732', 'Building 1', 'Circular Road', 1, 2, 10, 23, 'usr_23051708080522container-cargo-ship-imp.jpg', 'usr_23051708080522trailer-truck-transportation-trailer-truck-wallpaper-preview.jpg', 'FastTrack Freight is a transport company that offers quick and efficient shipping services to businesses and individuals alike. Their name reflects their commitment to speed and reliability, as they prioritize getting your freight delivered to its destination as quickly as possible.They specialize in both domestic and international shipping, with a wide range of transportation options available to suit your specific needs.', 'At FastTrack Freight, we pride ourselves on our extensive network and cutting-edge technology, which enables us to streamline the transportation process from start to finish. Our team of experienced professionals is dedicated to ensuring that every shipment is handled with the utmost care and delivered on time, every time.\r\n<br><br>\r\nWhether it\'s a local or long-distance delivery, our fleet of modern and well-maintained vehicles is equipped to handle a wide range of cargo sizes and types. From small packages to large freight, we have the capacity and expertise to meet your transportation needs efficiently.\r\n<br><br>\r\nWe value transparency and open communication with our clients. From the moment you entrust your shipment to us, our customer service representatives will keep you informed and updated on the progress of your delivery. Our commitment to exceptional service extends beyond transportation, as we strive to build long-lasting partnerships with our clients based on trust and reliability.\r\n<br><br>\r\nFastTrack Freight is not just a transport company; we are a dedicated partner in your supply chain. We understand the importance of your business\'s success, and we work tirelessly to ensure that your shipments reach their destinations swiftly and securely.', '2023-05-17', '2023-05-17', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_query`
--

CREATE TABLE `tbl_transport_query` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transport_query`
--

INSERT INTO `tbl_transport_query` (`id`, `name`, `email`, `phone`, `transport_id`, `created_on`, `status`) VALUES
(18, 'Ashvani', 'ashish@info.com', '8708584613', 3, '2023-05-07', '1'),
(19, 'Ashvani', 'ashish@info.com', '8708584613', 3, '2023-05-07', '1'),
(20, 'Ashvani', 'ashish@info.com', '8708584613', 3, '2023-05-07', '1'),
(21, 'Ashvani', 'ashish@info.com', '8708584613', 3, '2023-05-07', '1'),
(22, 'Akash', 'akash@info.com', '8168194245', 8, '2023-05-10', '1'),
(23, 'Prakhar', 'prakhar@gmail.com', '8168194245', 8, '2023-05-13', '1'),
(24, 'Vikash', 'vikash123@gmail.com', '8168194245', 22, '2023-05-18', '1'),
(25, 'Ashish', 'ashish123@gmail.com', '8708584613', 22, '2023-06-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `user_role` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_image`, `created_on`, `updated_on`, `user_role`) VALUES
(15, 'Akash', 'Chaudhary', 'akash.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_230513072807akash.jpg', '2023-05-02', '2023-05-13', '1'),
(16, 'Prakhar', 'Bhaskar', 'prakhar.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_230504073239163.jpg', '2023-05-02', '2023-05-04', '1'),
(17, 'Vikash', 'Yadav', 'vikash.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050407335517vikash.jpg', '2023-05-04', '2023-05-06', '2'),
(18, 'Ashvani', 'Kumar', 'ashvani.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050407342418ashvani.jpg', '2023-05-04', '2023-05-04', '2'),
(19, 'Dev', 'Ashish', 'ashish.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050407351219ashish.jpg', '2023-05-04', '2023-05-04', '2'),
(20, 'Sidharth', 'Sharma', 'sidharth.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050407355620sidharth.jpg', '2023-05-04', '2023-05-04', '2'),
(21, 'Mohit', 'Jangid', 'mohit.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050407363921mohit.jpg', '2023-05-04', '2023-05-04', '2'),
(22, 'Akash', 'Chaudhary', 'akashchaudhary.info@etransport.com', '827ccb0eea8a706c4c34a16891f84e7b', 'usr_23050408015122akash.jpg', '2023-05-04', '2023-05-04', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `color` varchar(150) NOT NULL,
  `mfl_condition` varchar(150) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`id`, `name`, `reg_no`, `vehicle_type_id`, `make_id`, `model_id`, `color`, `mfl_condition`, `transport_id`, `photo`, `created_on`, `updated_on`, `status`) VALUES
(14, 'Pro', 'DL23-VF-3234', 1, 3, 16, 'Blue', 'Good', 8, 'usr_23051106391714small_Eicher_Pro_2059 (1).jpg', '2023-05-11', '2023-05-11', '1'),
(15, 'Ace', 'UP14-AC-6534', 1, 2, 2, 'White', 'Excellent', 8, 'usr_23051106380515tata-ace-mega.png', '2023-05-11', '2023-05-11', '1'),
(16, 'Pro', 'HR-36-AV-2412', 6, 3, 17, 'Red', 'Excellent', 8, 'usr_23051106415716eicher-pro-3015.jpg', '2023-05-11', '2023-05-11', '1'),
(17, 'New', 'PB12-VG-3235', 6, 1, 12, 'Orange', 'Good', 8, 'usr_23051106462717mahindra-furio-17.jpg', '2023-05-11', '2023-05-11', '1'),
(18, 'Pro', 'DL45-HG-4534', 1, 3, 16, 'White', 'Average', 3, 'usr_23051106372218small_Eicher_Pro_2059 (1).jpg', '2023-05-11', '2023-05-11', '1'),
(19, 'Ace', 'HR26-ZD-5342', 1, 2, 2, 'Red', 'Good', 3, 'usr_23051106311919tata-ace-mega.png', '2023-05-11', '2023-05-11', '1'),
(20, 'Leyland', 'DL24-BG-5342', 6, 7, 11, 'White', 'Average', 3, 'usr_23051908265620ashok-leyland-boss.jpg', '2023-05-19', '2023-05-19', '1'),
(21, 'New', 'HR26-SD-4223', 2, 1, 13, 'White', 'Good', 3, 'usr_23051908283521mahindra-furio-16.jpg', '2023-05-19', '2023-05-19', '1'),
(22, 'Pro', 'DL45-HG-4534', 6, 3, 17, 'Orange', 'Good', 9, 'usr_23051908303722eicher-pro-3015.jpg', '2023-05-19', '2023-05-19', '1'),
(23, 'Ace', 'HR26-SD-4223', 7, 2, 1, 'Grey', 'Excellent', 9, 'usr_23051908320123Tata_Ace_xl.jpg', '2023-05-19', '2023-05-19', '1'),
(24, 'Leyland', 'DL23-CD-5523', 6, 7, 8, 'Brown', 'Good', 9, 'usr_23051908333624ashok-ecomet.jpg', '2023-05-19', '2023-05-19', '1'),
(25, 'Pro', 'UK14-KC-3423', 6, 3, 17, 'Orange', 'Good', 9, 'usr_23051908350925eicher-pro-3015.jpg', '2023-05-19', '2023-05-19', '1'),
(26, 'Leyland', 'DL23-CD-5523', 2, 7, 9, 'White', 'Excellent', 10, 'usr_23051908371526ashok-partner6.jpg', '2023-05-19', '2023-05-19', '1'),
(27, 'Pro', 'HR-36-AV-2412', 1, 3, 16, 'Blue', 'Excellent', 10, 'usr_23051908382927small_Eicher_Pro_2059 (1).jpg', '2023-05-19', '2023-05-19', '1'),
(28, 'New', 'DL23-CD-5523', 6, 1, 12, 'Orange', 'Average', 10, 'usr_23051908401928mahindra-furio-17.jpg', '2023-05-19', '2023-05-19', '1'),
(29, 'Ace', 'UP14-AC-3456', 1, 2, 2, 'Brown', 'Excellent', 10, 'usr_23051908413329tata-ace-mega.png', '2023-05-19', '2023-05-19', '1'),
(30, 'Leyland', 'DL23-CD-5523', 8, 7, 10, 'Grey', 'Excellent', 11, 'usr_23052007544130ashok-5525.jpg', '2023-05-20', '2023-05-20', '1'),
(31, 'New', 'UP14-AC-3456', 6, 1, 12, 'Orange', 'Good', 11, 'usr_23052007571231mahindra-furio-17.jpg', '2023-05-20', '2023-05-20', '1'),
(32, 'Pro', 'DL13-CF-3465', 6, 3, 17, 'Orange', 'Average', 11, 'usr_23052007580132eicher-pro-3015.jpg', '2023-05-20', '2023-05-20', '1'),
(33, 'Pro', 'DL23-CD-5523', 1, 3, 16, 'Blue', 'Excellent', 11, 'usr_23052007585633small_Eicher_Pro_2059 (1).jpg', '2023-05-20', '2023-05-20', '1'),
(34, 'Leyland', 'UP14-AC-3456', 6, 7, 8, 'Brown', 'Good', 12, 'usr_23052008085234ashok-ecomet.jpg', '2023-05-20', '2023-05-20', '1'),
(35, 'New', 'HR26-SD-4223', 6, 1, 13, 'White', 'Excellent', 12, 'usr_23052008094235mahindra-furio-16.jpg', '2023-05-20', '2023-05-20', '1'),
(36, 'Ace', 'DL45-HG-4534', 7, 2, 7, 'White', 'Average', 12, 'usr_23052008103836tataace-megaxl.jpg', '2023-05-20', '2023-05-20', '1'),
(37, 'Leyland', 'UK14-KC-3423', 6, 7, 11, 'White', 'Good', 12, 'usr_23052008113437ashok-leyland-boss.jpg', '2023-05-20', '2023-05-20', '1'),
(38, 'New', 'DL23-VF-3234', 6, 1, 12, 'Orange', 'Excellent', 13, 'usr_23052008125138mahindra-furio-17.jpg', '2023-05-20', '2023-05-20', '1'),
(39, 'Ace', 'HR-36-AV-2412', 7, 2, 1, 'Grey', 'Good', 13, 'usr_23052008140039Tata_Ace_xl.jpg', '2023-05-20', '2023-05-20', '1'),
(40, 'Pro', 'HR-36-AV-2412', 1, 3, 16, 'Blue', 'Good', 13, 'usr_23052008144740small_Eicher_Pro_2059 (1).jpg', '2023-05-20', '2023-05-20', '1'),
(41, 'Leyland', 'DL45-HG-4534', 2, 7, 9, 'White', 'Excellent', 13, 'usr_23052008163241ashok-partner6.jpg', '2023-05-20', '2023-05-20', '1'),
(42, 'New', 'DL24-BG-5342', 6, 1, 12, 'Orange', 'Average', 14, 'usr_23052008175042mahindra-furio-17.jpg', '2023-05-20', '2023-05-20', '1'),
(43, 'Pro', 'UP14-AC-3456', 1, 3, 16, 'Blue', 'Good', 14, 'usr_23052008183843small_Eicher_Pro_2059 (1).jpg', '2023-05-20', '2023-05-20', '1'),
(44, 'Ace', 'UK14-KC-3423', 1, 2, 7, 'White', 'Excellent', 14, 'usr_23052008193744tataace-megaxl.jpg', '2023-05-20', '2023-05-20', '1'),
(45, 'Leyland', 'DL23-VF-3234', 2, 7, 9, 'White', 'Excellent', 14, 'usr_23052008210445ashok-partner6.jpg', '2023-05-20', '2023-05-20', '1'),
(46, 'Leyland', 'HR-36-AV-2412', 8, 7, 10, 'Grey', 'Good', 15, 'usr_23052008285646ashok-5525.jpg', '2023-05-20', '2023-05-20', '1'),
(47, 'Pro', 'DL45-HG-4534', 6, 3, 17, 'Orange', 'Excellent', 15, 'usr_23052008293847eicher-pro-3015.jpg', '2023-05-20', '2023-05-20', '1'),
(48, 'New', 'UP14-AC-3456', 6, 1, 12, 'Orange', 'Good', 15, 'usr_23052008310848mahindra-furio-17.jpg', '2023-05-20', '2023-05-20', '1'),
(49, 'Ace', 'DL45-HG-4534', 1, 2, 7, 'White', 'Good', 15, 'usr_23052008315749tataace-megaxl.jpg', '2023-05-20', '2023-05-20', '1'),
(50, 'Leyland', 'DL45-HG-4534', 6, 7, 11, 'White', 'Good', 16, 'usr_23052109412850ashok-leyland-boss.jpg', '2023-05-21', '2023-05-21', '1'),
(51, 'Pro', 'DL23-CD-5523', 1, 3, 16, 'Blue', 'Excellent', 16, 'usr_23052109421451small_Eicher_Pro_2059 (1).jpg', '2023-05-21', '2023-05-21', '1'),
(52, 'New', 'UP14-AC-3456', 6, 1, 12, 'White', 'Good', 16, 'usr_23052109432952mahindra-furio-16.jpg', '2023-05-21', '2023-05-21', '1'),
(53, 'Ace', 'UP14-AC-3456', 1, 2, 7, 'White', 'Excellent', 16, 'usr_23052109442353tataace-megaxl.jpg', '2023-05-21', '2023-05-21', '1'),
(54, 'Pro', 'HR-36-AV-2412', 6, 3, 17, 'Orange', 'Good', 17, 'usr_23052109461054eicher-pro-3015.jpg', '2023-05-21', '2023-05-21', '1'),
(55, 'Leyland', 'DL45-HG-4534', 6, 7, 8, 'Brown', 'Good', 17, 'usr_23052109465355ashok-ecomet.jpg', '2023-05-21', '2023-05-21', '1'),
(56, 'Ace', 'DL45-HG-4534', 1, 2, 1, 'Grey', 'Good', 17, 'usr_23052109474856Tata_Ace_xl.jpg', '2023-05-21', '2023-05-21', '1'),
(57, 'New', 'DL23-VF-3234', 6, 1, 12, 'Orange', 'Excellent', 17, 'usr_23052109491557mahindra-furio-17.jpg', '2023-05-21', '2023-05-21', '1'),
(58, 'Leyland', 'DL23-CD-5523', 2, 7, 9, 'White', 'Excellent', 18, 'usr_23052109504658ashok-partner6.jpg', '2023-05-21', '2023-05-21', '1'),
(59, 'New', 'UP14-AC-3456', 6, 1, 13, 'White', 'Excellent', 18, 'usr_23052109520559mahindra-furio-16.jpg', '2023-05-21', '2023-05-21', '1'),
(60, 'Leyland', 'DL45-HG-4534', 6, 7, 11, 'White', 'Good', 18, 'usr_23052109525860ashok-leyland-boss.jpg', '2023-05-21', '2023-05-21', '1'),
(61, 'Ace', 'HR-36-AV-2412', 1, 2, 7, 'White', 'Excellent', 18, 'usr_23052109533761tataace-megaxl.jpg', '2023-05-21', '2023-05-21', '1'),
(62, 'Leyland', 'HR-36-AV-2412', 2, 7, 9, 'White', 'Excellent', 19, 'usr_23052109543462ashok-partner6.jpg', '2023-05-21', '2023-05-21', '1'),
(63, 'Pro', 'DL23-VF-3234', 6, 3, 17, 'Orange', 'Excellent', 19, 'usr_23052109551563eicher-pro-3015.jpg', '2023-05-21', '2023-05-21', '1'),
(64, 'Ace', 'DL45-HG-4534', 7, 2, 1, 'Grey', 'Excellent', 19, 'usr_23052109560864Tata_Ace_xl.jpg', '2023-05-21', '2023-05-21', '1'),
(65, 'Leyland', 'UP14-AC-3456', 6, 7, 8, 'Brown', 'Good', 19, 'usr_23052109572865ashok-ecomet.jpg', '2023-05-21', '2023-05-21', '1'),
(66, 'Leyland', 'DL45-HG-4534', 8, 7, 10, 'Grey', 'Good', 20, 'usr_23052109584766ashok-5525.jpg', '2023-05-21', '2023-05-21', '1'),
(67, 'New', 'UP14-AC-3456', 6, 1, 13, 'White', 'Good', 20, 'usr_23052109595867mahindra-furio-16.jpg', '2023-05-21', '2023-05-21', '1'),
(68, 'New', 'DL23-CD-5523', 6, 1, 12, 'Orange', 'Excellent', 20, 'usr_23052110004668mahindra-furio-17.jpg', '2023-05-21', '2023-05-21', '1'),
(69, 'Leyland', 'DL23-CD-5523', 2, 7, 9, 'White', 'Excellent', 20, 'usr_23052110013969ashok-partner6.jpg', '2023-05-21', '2023-05-21', '1'),
(70, 'Leyland', 'HR-36-AV-2412', 6, 7, 8, 'Brown', 'Excellent', 21, 'usr_23052110025070ashok-ecomet.jpg', '2023-05-21', '2023-05-21', '1'),
(71, 'New', 'DL23-CD-5523', 6, 1, 12, 'Orange', 'Excellent', 21, 'usr_23052110032971mahindra-furio-17.jpg', '2023-05-21', '2023-05-21', '1'),
(72, 'Pro', 'DL23-CD-5523', 6, 3, 17, 'Orange', 'Excellent', 21, 'usr_23052110043072eicher-pro-3015.jpg', '2023-05-21', '2023-05-21', '1'),
(73, 'Ace', 'DL45-HG-4534', 7, 2, 1, 'Grey', 'Good', 21, 'usr_23052110052373Tata_Ace_xl.jpg', '2023-05-21', '2023-05-21', '1'),
(74, 'Leyland', 'DL45-HG-4534', 2, 7, 9, 'White', 'Excellent', 22, 'usr_23052110065574ashok-partner6.jpg', '2023-05-21', '2023-05-21', '1'),
(75, 'Leyland', 'DL23-CD-5523', 8, 7, 10, 'Grey', 'Excellent', 22, 'usr_23052110074575ashok-5525.jpg', '2023-05-21', '2023-05-21', '1'),
(76, 'Ace', 'UP14-AC-3456', 1, 2, 2, 'Brown', 'Good', 22, 'usr_23052110083076tata-ace-mega.png', '2023-05-21', '2023-05-21', '1'),
(77, 'Pro', 'HR-36-AV-2412', 6, 3, 17, 'Orange', 'Excellent', 22, 'usr_23052110091577eicher-pro-3015.jpg', '2023-05-21', '2023-05-21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_type`
--

CREATE TABLE `tbl_vehicle_type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vehicle_type`
--

INSERT INTO `tbl_vehicle_type` (`id`, `name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Mini Truck', '2023-04-26', '2023-05-11', '1'),
(2, 'Lorri', '2023-04-26', '2023-05-11', '1'),
(6, 'Truck', '2023-05-06', '2023-05-06', '1'),
(7, 'Pickup Truck', '2023-05-11', '2023-05-11', '1'),
(8, 'Tow Truck', '2023-05-11', '2023-05-11', '1'),
(9, 'Tanker', '2023-05-11', '2023-05-11', '1'),
(10, 'Tractor-Trailer', '2023-05-11', '2023-05-11', '1'),
(11, 'Car Transporter', '2023-05-11', '2023-05-11', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_make`
--
ALTER TABLE `tbl_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transport_query`
--
ALTER TABLE `tbl_transport_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vehicle_type`
--
ALTER TABLE `tbl_vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_make`
--
ALTER TABLE `tbl_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_transport_query`
--
ALTER TABLE `tbl_transport_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_vehicle_type`
--
ALTER TABLE `tbl_vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
