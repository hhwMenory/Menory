#!/bin/bash
tag_version=v$1


tag_list=$(git tag -l)

for tag in $tag_list; do
	if [ $tag = $tag_version ]; then
		echo "tag version $tag_version is exisit"
		exit 1;
	fi
done

git tag $tag_version
git commit -m "tag $tag_version"
git push origin --tag
