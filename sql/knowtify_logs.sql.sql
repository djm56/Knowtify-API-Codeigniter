DROP TABLE IF EXISTS `knowtify_log`;

#
# Table structure for table 'knowtify_log'
#


CREATE TABLE `knowtify_log` (
  `idknowtify_log` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(45) DEFAULT NULL,
  `emaildata` longtext,
  `ip_address` varchar(45) DEFAULT NULL,
  `email_type` varchar(45) DEFAULT NULL,
  `action` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idknowtify_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
