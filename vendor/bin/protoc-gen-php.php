#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../centraldesktop/protobuf-php"
BIN_TARGET="`pwd`/protoc-gen-php.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
