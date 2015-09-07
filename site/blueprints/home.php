<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: true
	sortable: true
	fields:
		caption: 
			label: Caption
			type: text
		tags: 
			label: tags
			type: tags
			lower: true
			index: all
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large