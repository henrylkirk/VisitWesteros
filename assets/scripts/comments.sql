-- Create table used to store comments

CREATE TABLE `finalComments` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL default '',
  `comment` varchar(140) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ;

-- Add some data

INSERT INTO `finalComments` VALUES (1, 'Eddard Stark', 'Winter is coming.');
INSERT INTO `finalComments` VALUES (2, 'Lord Varys', 'A very small man can cast a very large shadow.');