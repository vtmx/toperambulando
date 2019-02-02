UPDATE wp_posts
SET post_content = REPLACE (post_content, 'Victor', 'Vitor')


UPDATE wp_posts
SET post_content = REPLACE (post_content, '<figcaption><a href="', '<figcaption>')
WHERE post_content REGEXP '<figcaption>$';


https://pt.stackoverflow.com/questions/29508/replace-no-sql-caractere-para-manter-uma-parte-do-texto


SELECT post_content FROM wp_posts WHERE post_content REGEXP '\<figcaption\>\<a href=".*"\>'


http://localhost/phpmyadmin/tbl_find_replace.php?db=toperambulando&table=wp_posts
/\<figcaption\>\<a href=".*"\>\<\/a\>/g