# PetRofi

Quickly written aid to show [pet](https://github.com/knqyf263/pet) snippets in [rofi](https://github.com/davatorium/rofi/)
and copy selected entry's command into system clipboard.

## Operating system requirements:

1. [rofi](https://github.com/davatorium/rofi/)
2. PHP 8.3 (it would be nice to make it for other PHP versions too, some day)
3. `tail` from [coreutils](https://www.gnu.org/software/coreutils/) package to grab second (i.e. command) of two-lined output
4. [xsel](https://vergenet.net/~conrad/software/xsel/) to transfer command into clipboard

3rd and 4th position can be replaced by whatever you like.

## Usage

1. create PHAR file using PHP 8.3:
   ```shell
   php composer.phar install --dev
   vendor/bin/box compile --composer-bin composer.phar
   ```
2. (optionally) move PHAR file and copy `petrofi.sh` into some dedicated directory such as `~/.local/bin`
   ```shell
   mv petrofi.phar ~/.local/bin
   cp petrofi.sh ~/.local/bin
   ```
3. bind key to launch `petrofi.sh` in your favourite key binding manager

## To do

1. rofi's script mode