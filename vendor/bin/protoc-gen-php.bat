@ECHO OFF
SET BIN_TARGET=%~dp0/../protocolbuffers/protoc-gen-php/bin/protoc-gen-php
php "%BIN_TARGET%" %*
