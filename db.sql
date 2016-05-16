CREATE TABLE `score` (
  `score_id` int(11) NOT NULL AUTO_INCREMENT,
  `game` varchar(100) NOT NULL,
  `player` varchar(100) NOT NULL,
  `score` bigint(20) NOT NULL DEFAULT '0',
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`score_id`),
  KEY `idx_datetime` (`datetime`),
  KEY `idx_game_name` (`game`,`player`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

