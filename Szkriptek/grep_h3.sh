#!/bin/bash

(( $# != 1 )) && echo "Usage: $(basename $0) file	- list markdown h3s" && exit 0

IFS=$'\n';
for i in $(grep "$1" --regex '^## ' | cut -d ' ' -f '2-'); do
	echo func. spec. - $i;
done
