# MARKDOWN README

This text talks about the basic syntax of **Markdown**.

[TOC]

<!--To display the contents-->

## TABLE OF CONTENTS

**Markdown** can generate Contents automatically by`[TOC]`or`[toc]` token based on you titles after `#` token.

Note: You have to add a blank line after the `[TOC]` token, and click the `Preference > Rendering > Detect table of contents token` choice in **MacDown** app.

## INTRODUCTION

**Markdown** is one of the most popular languages for making notes and the markdown file usually end up with ```.md```. 

## TITLES

**Markdown** use `#` to represent titles.

The line above `================` (equals `#`) or `-----------------` (equals `##`) is also title.


## SYMBOLS

### Inline Formating

1. `*Italy*` is *Italy*.
2. `**Bold**` is **Bold**.
3. `***Italy and Bold***` is ***Italy and Bold***.
4. `~~delete~~` is ~~delete~~.  
5. ``` `inline code` ``` is `inline code`.
6. `>quote` is
 
	>quote
7. `*********`,`_______` or `----------` will be a line, like 
**********

### Lists

1. Ordered list.

	> 1. First.
	> 2. Second.
	> 3. Third.
	
2. Unordered list
	>*	First.
	>	+ Color.
	>		- Black.
	>		- Yellow.
	>	+ Size.
	>*	Second.

`Note: There is a blank space behind the List symbol *, + and -.`

## Mathematics

**Markdown** supports ***LATEX*** math expressions with Internet connection.
We usually use symbol `$` like `$\int_0^\infty f(x)\mathrm{d}x$`, then we will get
>$\int_0^\infty f(x)\mathrm{d}x$
.


## Code Blocks

As we know, **Markdown** always quotes code blocks, we can add `tab` in the front of every line to declare that this part is a code block. Or we can use \` \` \` to bracket the code block and add the language name behind the first \` \` \`(Note:there is a space blank between the first \` \` \` and specific language name).


``` cpp
#include <iostream>
#define Pi 3.1415926
using namespace std;
int main()
{
	cout << "Hello, world!" << endl;
	return 0;
}
```
or

``` python
import numpy as np
print('Hellow, world!')
```
if the code language is not specific, we can just ignore it or we can use `tab`:

	import numpy as np
	print('Hellow, world!')

## Comments

`<!--COMMENTS-->` is the expression used in HTML, so it is not recommended in **Markdown**.
<!--my comments-->

## Hypertext

1. `[Name](address "capital")` is
[Physics Review Letter](https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.096603 "Shufeng Zhang").

	Note: **"captital"** is the text shown when you put your mouse cursor on the hypertext.

2. We can put all the hypertext in order and cite them with only names and their serial numbers. The specific address will be listed in order at the end of the text.
	
	eg:
	
	>The most famous physcial journals like [Physics Review Letter]\[1] and [Physics Review B]\[2], etc.

	>[1]:https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.096603 "Shufeng Zhang"
	>[2]:https://journals.aps.org/prb/abstract/10.1103/PhysRevB.71.184426 "Jianwei Zhang"
	
	then we will get:
	>The most famous physcial journals like [Physics Review Letter][1] and [Physics Review B][2], etc.

[1]:https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.096603 "Shufeng Zhang"
[2]:https://journals.aps.org/prb/abstract/10.1103/PhysRevB.71.184426 "Jianwei Zhang"

3. We can also just use the `<>` to represent hyper address, like
` <https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.096603> `
	>We can see the paper in <https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.096603> .
	