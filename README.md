# CI_throttle
Codeigniter Login Attempts Throttle

##Background
I was looking for a Cideigniter login throttling library and couldn't find a simple one to use, so I wrote one.

##Requirements
CodeIgniter 2 or 3
MySQL database or equivalent
MY_Model from avenirer (find it on github. It's great.) or equivalent

table called throttles with the following:
CREATE TABLE throttles
(
  id INT UNSIGNED PRIMARY KEY,
  ip VARCHAR(64),
  created_at DATETIME,
  updated_at DATETIME,
  type INT UNSIGNED
);
