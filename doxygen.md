[reference for tags](https://www.doxygen.nl/manual/commands.html)
[Video Reference](https://www.youtube.com/watch?v=TtRn3HsOm1s)

## Install
[Download](https://doxygen.nl/download.html)
You have to enter email and password, download link will be mailed

## Start

Tripple slashes `///` is single line comment for doxygen
1. first senetence is brief description
2. subsequent sentences constitute detailed description

## Using Doxywizard

### Wizard tab
1. Open doxy wizard. Initial tab is `Wizard` tab
	set
	1. source folder
	2. target folder(destination for generated documentation files)
	3. project name
	4. project synopsis
	5. project version
	6. project logo
	7. Check `Scan recursively`
2. Go to `Topics` &gt;&gt;`Output`, Uncheck `Latex`, since we only need html
	1. in the `Topics` list, select `output`
	2. Uncheck `Latex`
3. If you are using PHP, go to `Topics` &gt;&gt; `Mode` and check `Optimize for C or PHP output`
3. Go to `Run` Tab &gt;&gt; `Run Doxygen`

### Expert tab

To set all configuration options go to `Expert` tab

### Important config options
1. `JAVADOC_AUTOBRIEF` : required for extracting comments with three slashes `///`
2. Under `Topics` &gt;&gt;`Build`
 1. Check `EXTRACT_ALL`  : Extract all comments
 2. Uncheck `SHOW_USED_FILES`
3. Under `Topics` &gt;&gt;`HTML`
	1. Check `GENERATE_TREE_VIEW`
	2. Check `DISABLE INDEX` : To remove top bar
4.  Under `Topics` &gt;&gt;`Inputs`
	1. add additional `external` source folders in `INPUT`
	2. add folders to `ignore` in `EXCLUDE`
	3. For adding images in documentation pages, set `IMAGE_PATH`
	
## Important tags
1. @brief
2. @param
3. @returns
4. @details
5. @see anotherMemebreFunction() anotherMemebreFunction2() 
6. @note
7. @attention
8. @warning
9. @date
10. @returns
11. @see

- in Details, you could use markdown

## Tutorial Pges

Could be
1. html
2. markdown

**PS:** Ideal to save them in seperate folder say `doxyip/tutorials`
### Main Page

`@mainpage` tag marks main page. This will be the first page in the documentation

### Additional pages

1. @page pageId	Page Title
2. @tableofcontents
3. @section sectionId Section Title
4. @subsection subsectionId	SubSection Title


### Sub pages
Below `@page pageId	Page Title`<br />
Add `@subpage pageIdOfIntendedSubpage`

### Link to other pages

`@ref pageId/sectionId/SubsectionId`

eg:
```
See this page for more @ref SubsectionId
```

## Inserting Images

1. use markdown tag for images
2. save image in `IMAGE_PATH` set above
**PS:** Ideal to save them in seperate folder say `doxyip/images`

## Creating final documentation pages

1. To save the current configuration, do to `File` &gt;&gt; `Save` .
	1. Save the configuration file witha name of your choice. This is for future use
	2. You can use `File` &gt;&gt; `Open` to use the saved config file later
2. Click `Run doxygen`
3. Alternatively once configuration file is saved, you can run in command line

```
doxygen ConfigFileName
```

## Creating PDF documentation

1. Go to `Topics` &gt;&gt;`Output`, Check `Latex`
2. Run Doxygen
3. go to latex output and run `make.bat`

>  but you need `pdflatex`

There are a lot of options available
1. [MikTeX](http://www.miktex.org/)
2. [TeX Live](http://www.tug.org/texlive)
3. [W32TeX](http://w32tex.org/)



