# linkshortener
Link shortener that doesn't need SQL.

## Notice: Archived

This project was followed by Elixire, which is an open source Image Uploading and Link Shortening software, written in Python 3. 

This project is not indicative of my programming abilities, as it was hacked together quickly to just *work*.

This is not a very secure script, it's not maintained, and you're recommended to use Elixire instead.

[Elixire (code)](https://gitlab.com/elixire/elixire)

[elixi.re (public instance)](https://elixi.re)

### How to install
Choose what you'll use. Will you use the folder branch or the default branch?

The differences between two is simple. Folder branch is being updated and default branch is not. Default branch requires you to open a link like this: http://somerandomwebsitelink.com/shortlink.php?a=something or http://somerandomwebsitelink.com?a=something at best. The folder branch will work like this: http://ardao.me/github or http://somerandomwebsitelink.com/something.

The only big problem with folder is that it creates both a file and folder, making the size per shortened link a bit more. (about 33 bytes, which causes about 1kb more usage than default branch after about 35 shortenings.)

After you decide which one you'll use, just download it and copy the files over to your php server. Replace "test" in admin.php (in $password) with the password you want- leaving test as your password will disable the admin panel.
