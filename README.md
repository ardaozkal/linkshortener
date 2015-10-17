# linkshortener
Link shortener that doesn't need MySQL. The script of http://ardao.me/.

###How to install
Choose what you'll use. Will you use the folder branch or the default branch?

The differences between two is simple. Folder branch is being updated and default branch is not. Default branch requires you to open a link like this: http://somerandomwebsitelink.com/shortlink.php?a=something or http://somerandomwebsitelink.com?a=something at best. The folder branch will work like this: http://ardao.me/github or http://somerandomwebsitelink.com/something.

The only big problem with folder is that it creates both a file and folder, making the size per shortened link a bit more. (about 33 bytes, which causes about 1kb more usage than default branch after about 35 shortenings.)

After you decide which one you'll use, download it and copy the files over to your php server. Replace "test" (of htmlspecialchars($touse["pass"]) == "test") in admin.php (and adminpost.php on default branch) with the password you want- leaving test as your password might cause problems.
