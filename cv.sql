-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 09:11:39
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cv`
--

-- --------------------------------------------------------

--
-- 資料表結構 `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `course`
--

INSERT INTO `course` (`id`, `class`, `c1`) VALUES
(1, '授課內容', '專案管理輕鬆學，讓你每天多出三小時'),
(2, '規劃課程', '時間管理輕鬆學，讓你拿回時間發球權\r\n');

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `class`, `c1`) VALUES
(1, '明志科技大學', '資管系畢業'),
(2, '104人力銀行', '專案經理'),
(3, '保德信壽險', '壽險顧問'),
(10, '旭聯科技', '專案經理'),
(11, '台灣理光', '專案經理');

-- --------------------------------------------------------

--
-- 資料表結構 `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `see` tinyint(1) NOT NULL DEFAULT 1,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `path` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `see`, `create_time`, `update_time`, `path`, `note`) VALUES
(1, '嘉泰老師講師服務簡介.mp4', 'video/mp4', 1, '2019-12-04 15:32:09', '2019-12-04 08:34:53', './upload/嘉泰老師講師服務簡介.mp4', ''),
(2, '新莊靈糧堂夫妻主日.mp4', 'video/mp4', 1, '2019-12-04 15:14:47', '2019-12-04 15:14:47', './upload/新莊靈糧堂夫妻主日.mp4', ''),
(27, 'Android APP製作.jpg', 'image/jpeg', 1, '2019-12-04 15:36:09', '2019-12-04 15:36:09', './upload/Android APP製作.jpg', '');

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `information`
--

INSERT INTO `information` (`id`, `acc`, `pw`, `name`, `email`, `motto`) VALUES
(1, 'leo', '11111111', '許嘉泰', 'chiatai.hsu@gmail.com', '《我認為將來上帝衡量我這一生的標準，不是我幫別人賺了多少錢，而是我影響了多少人的人生！');

-- --------------------------------------------------------

--
-- 資料表結構 `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `myself` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `introduction`
--

INSERT INTO `introduction` (`id`, `myself`) VALUES
(1, '我是嘉泰。2002年7月進入104人力銀行，累計了6年網路產業經驗，最大的驕傲與榮耀是：在【104外包網】這段時間，從網站經營,  社群建立,  業務招攬,  演講發表,  帶領團隊，從50,000元/月營業額，到超過2,000,000元以上的營業額，成長超過40倍。這都是全體部門同仁努力，才能塑造出  一個C端收費模式網站。\r\n\r\n回顧剛入104時，主要從事  業務職--電話行銷開發一職，因個人努力與傑出工作表現。獲得拔崛之機會。曾經\r\na.  成功破解競爭對手  竊取公司網站資料之不當手段。\r\nb.  也曾提出線上刷卡等新功能，使每月業績額突破1,000,000元。\r\n感謝歷屆主管賞識與栽培，讓我習得  經營會員網站、管理業務團隊、對外演講、異業結盟、廣告銷售....等相關寶貴與不同的經歷。更磨練了  經營管理、業務開發、客戶關係管理、行銷合作..等相互整合能力。\r\n\r\n此外任職期間，多次擔任福委,並於2007年擔任【福委會主委】，規劃  全公司社團管理、尾牙活動、員工旅遊、員工健診、中秋端午送禮..等大小活動。(年度尾牙擔任過三次活動主持人，規劃600人以上活動，運用資金超過2,000,000元，感謝公司提供機會，讓我有為大多數人謀福利的機會，並能規劃與管控活動的執行。\r\n\r\n2008年，由於部門營運狀況良好，年度業績已達成無誤。個人生涯階段性任務已達成，因此選擇離開，迎接下一階段挑戰。\r\n\r\n適逢保德業務經理主動挖角，進入保德信服務。當時雖遇次貸風暴的金融風暴，但個人憑著過去累績的業務經驗與努力,讓本人於保德信將近一年的工作期間當中，獲得CMO新人賞，與連續八週的3W  (一週照顧3個家庭，至少3張保單/週)等等成績，2009年更因部門全體業務小組成員將士用命，成為當年度保德信之冠軍小組，業務經理也獲選成為當年度最佳業務經理，但後續個人因計畫結婚，需穩定經濟來源，因此選擇離開。\r\n\r\n2010年10月進入旭聯科技，擔任專案經理一職，管理專案部門，主要包含政大、清大EMBA網路學分班營運(混成學習模式(線上影音+實體面授+同步線上 )與舊生績效達成、PMP  Renew課程、CSO企業服務長網路班、政府標案專案承接與執行、新專案規劃與執行策略聯盟異業合作…等等\r\n\r\n2012年8月因內部組織合併，產品策略轉向推廣公職線上學習課程，公司希望透過個人累積之專案管理與講師經驗，全力負責校園講座舉辦推廣(當時個人負責學校已達20餘間)  ，除此之外，目前也協助公司進行標案撰寫，後續由於部門轉型為提供幼教與學生補教市場服務，與個人所規劃之提供企業服務之職涯漸行漸遠，因此，選擇離開進入下一個新的舞台。\r\n\r\n2013年8月進入台灣怡海科技，擔任CRM顧問\r\n在內部提供極少資源的情況下，以接近自學的方式，成功考取Salesforce  Adm  201國際專業證照，協助公司成為Salesfroce  台灣  Partner。\r\n\r\n感謝老闆愛戴賦予重任，一人同時身兼業務經理(負責業務開發)、CRM  各產業Live  Demo平台規劃建置、網站企畫、行銷企劃(媒體採買與策略聯盟)、說明會舉辦、影片編輯英翻中與字幕製作....等等工作內容，並成為台灣與大陸對應溝通之窗口。\r\n\r\n2014年5月進入台灣理光，擔任專案經理一職,，主要工作內容如下:\r\n\r\n1.提供企業用戶有關事務機文件與資訊安全整體解決方案與技術諮詢\r\n解決方案範圍包含:列印管理、文件流程優化、傳真伺服器導入、文件資安影像備存、資產設備管理...\r\n2.協助業務同仁跟進銷售活動，贏得客戶最終訂單    (Pre-Sales)\r\n3.協助導入成交Solution案件之專案管理\r\n4.負責Solution    產品內部教育訓練\r\n5.公司對外行銷活動    Solution活動協辦與支援\r\n6.公司Solution內部交易流程與表單優化\r\n\r\n2016年5月 進入微星科技,擔任高級管理師\r\n\r\n感謝微星科技主動挖角,希望借重個人在業界多年線上學習製作與講師經驗\r\n協助內部同仁將個人之Domain knowhow 製作為線上課程\r\n取代傳統之SOP,讓新進同仁能夠快速上手成為公司即戰力\r\n至今已完成數十門線上課程\r\n\r\n個人不怕勞累,辛苦，只期許善用累計之職能技巧，帶領工作團隊，達成公司既定之年度目標。感謝審閱！');

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `j1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `j1`, `c1`) VALUES
(1, '專案經理', '網路或資訊產業'),
(2, '課程製作', '外商或上市櫃企業尤佳'),
(3, 'php工程師', '使用wordpress網站尤佳');

-- --------------------------------------------------------

--
-- 資料表結構 `license`
--

CREATE TABLE `license` (
  `id` int(10) UNSIGNED NOT NULL,
  `l1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `license`
--

INSERT INTO `license` (`id`, `l1`) VALUES
(1, '乙級就業服務技術士'),
(2, 'PMP國際專案管理師'),
(15, 'WBSA世界商務策劃師'),
(16, 'CSO企業服務長證照'),
(18, 'Salesforce Adm 201'),
(19, 'MCSE'),
(21, '丙級電腦軟體設計');

-- --------------------------------------------------------

--
-- 資料表結構 `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `exposure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `media`
--

INSERT INTO `media` (`id`, `exposure`, `m1`, `link1`) VALUES
(1, '雜誌曝光', '經理人雜誌曝光', 'https://leo520777.pixnet.net/blog'),
(2, '廣播訪問', '中廣專訪', 'https://is.gd/01QHZU'),
(3, '實體演講', '中國生產力分享', 'https://leo520777.pixnet.net/blog');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `s1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `s1`) VALUES
(1, 'Articulate'),
(2, 'Camtasia '),
(3, 'Crazytalk animator'),
(4, 'WordPress'),
(11, 'Adobe XD'),
(14, 'Javascrip'),
(16, 'Photoshop');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `name`, `addr`, `tel`, `birthday`, `email`, `ename`, `skills`, `license`) VALUES
(1, 'ttt', 'tttt', 'tttt', 'tttt', 'ttt', '2019-10-07', 'dddd', '', '', ''),
(2, '1111', '1111', '許嘉泰', '1111', '1111', '2019-10-01', 'chiatai.hsu@gmail.com', 'Leo', 'Dreamweaver、FrontPage、HTML、Excel、Internet Explorer、Outlook、PowerPoint、Word、articulate 、威力導演、CrazyTalk Animator、camtasia 、wordpress', '《我認為將來上帝衡量我這一生的標準，不是我幫別人賺了多少錢，而是我影響了多少人的人生！》克雷頓．克里斯汀生\r\n'),
(4, '33333', '333333', 'test', '', '', '2019-11-13', '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `class`, `work1`, `link1`, `work2`, `link2`) VALUES
(1, 'wordpress網站架設', '軟體雲市集網站', 'https://saas520.com/', '', ''),
(2, '卡通動畫設計', '嘉泰老師講師服務介紹-2018【甲尚 2D 動畫應用競賽】台灣區特別獎', 'https://reurl.cc/XXa8vg', '新莊靈糧堂夫妻主日見證影片', 'https://reurl.cc/EKb0O0'),
(3, 'Android APP', '365恩典之旅(中英對照版)', 'https://reurl.cc/k58e4L', '', ''),
(18, '測試', 'ddd', '', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `course`
--
ALTER TABLE `course`
  ADD UNIQUE KEY `id` (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `license`
--
ALTER TABLE `license`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
