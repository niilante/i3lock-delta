# i3lock Delta
This script downloads a new image from [Unsplash](1). It checks whether the screen was locked every 5 minutes. In case of no Internet, it retries every 1 minute and displays the previous picture untill a new one is downloaded.

## Dependencies

+ [PHP](2) - Available in repositories of most popular distribution.
+ [Composer](3) - Available in repositories of most popular distribution.
+ [Imagemagick](4) - Specifically, the `convert` command.
+ [i3lock-color](5) - Available in AUR (For Arch users). Fork of i3lock with more features. Do not use i3lock since this program utilizes the features of i3lock-color.
+ [bash](6) - Most probably will be installed already.


<!--Links-->
[1]: https://unsplash.com
[2]: https://php.net
[3]: https://getcomposer.org
[4]: https://imagemagick.org
[5]: https://github.com/PandorasFox/i3lock-color
[6]: https://www.gnu.org/software/bash/
