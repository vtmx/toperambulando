UPDATE wp_posts
SET post_content = REPLACE (post_content, 'Victor', 'Vitor')


UPDATE wp_posts
SET post_content = REPLACE (post_content, '<figcaption><a href="', '<figcaption>')
WHERE post_content REGEXP '<figcaption>$';


https://pt.stackoverflow.com/questions/29508/replace-no-sql-caractere-para-manter-uma-parte-do-texto


SELECT post_content FROM wp_posts WHERE post_content REGEXP '\<figcaption\>\<a href=".*"\>'


http://localhost/phpmyadmin/tbl_find_replace.php?db=toperambulando&table=wp_posts
/\<figcaption\>\<a href=".*"\>\<\/a\>/g

---

Galeria

gallery gallery-old
wp-block-gallery

gallery-columns-4
gallery-columns-4 is-cropped

gallery-columns-
columns-

gallery-item
blocks-gallery-item

---

Imagens

Selecionar todas as imagens cortadas
(-\d{3}x\d{3})

Selecionar largura 780px
-780x\d{3}

remove: Small


