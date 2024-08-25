#!/usr/bin/env bash

PHAR_FILENAME="petrofi.phar"
PETROFI_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )

if [ ! -r "$PETROFI_DIR/$PHAR_FILENAME" ]; then
  rofi -e "No $PHAR_FILENAME file found in '$PETROFI_DIR'..."
  exit 1
else
  SELECTED_ENTRY=$(bash -c "php $PETROFI_DIR/$PHAR_FILENAME" | rofi -dmenu -mesg '<small><span foreground="lightgreen">Selected item command will be copied to clipboard</span></small>' -markup-rows -sep "\t" -eh 2 -p "Pet search" -format p)

  if [ "$SELECTED_ENTRY" ]; then
    echo "$SELECTED_ENTRY" | tail -1 | xsel -ib --trim
  fi
fi
