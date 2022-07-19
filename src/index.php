<?php
/**
* @mainpage PHP Doxygen(index.php)
## PHP Doxygen is a simple project to demonstrate documenting php projects for Doxygen
 
 This is the `index.php` page for the project. \n 
 Since **`mainpage`*** tag is used, comments in this page will be displayed on the top of home page of **Doxygen Documentation**\n
 This project tries to explain documenting PHP projects with doxygen tags for
 
1. Plain PHP pages
2. Classes
3. Adding extra documentation pages
   

@date 29th August 2021
@copyright Copyright 2012 Chris Enterprises. All rights reserved.
@license{This project is released under the GNU Public License.}
@author Sreekanth

@details This details is added with `details` tag and will be displayed below all the other tags

@details This details is added with additional `details` tag, to demonstrate use of paragraphs
   
\par Paragraph title with `par` tag
first line adding line break 1\n
second line adding line break\n

<hr />
\par Paragraph title with par tag
```
<?php
//Some code / sketch
echo "Hello world";
?>
```

Code displayed with markdown tag.
For this 'EXAMPLE_PATH' (in Expert Tab &gt;&gt; Topic &gt;&gt; Input must be set to the folder where example codee files are saved
\par Including other php files with include tag
@include "examples/example1.php"
@remarks
Licence is added with ALIAS.
https://stackoverflow.com/questions/12353409/doxygen-and-license-copyright-informations

@remarks
[Read me file should be like](https://stackoverflow.com/questions/28938063/customize-treeview-in-doxygen)


Any other information that needs to be shown at the bottom of main page in documentation may be placed at the bottom in `markdown language` w/o tags


 */

?>
Will this be shown in documentation ? No