# TYPO3 Page Title Example

## About

This TYPO3 extension demonstrates a simple usage of the
[PageTitle API](https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/PageTitleApi/).

## Requirements

A TYPO3 version 9.5.x instance, with a valid site configuration.

## Installation

### Command line with "Composer"

If you are using [Composer](https://getcomposer.org/), add the following repository and download/install the extension.

    composer config repositories.pagetitle vcs https://github.com/schams-net/pagetitle.git
    composer require schams-net/pagetitle "dev-master"

Continue with the step *Activate extension* below.

### Command line without "Composer"

*To be documented.*  
Continue with the step *Activate extension* below.

### ZIP file from GitHub

Go to [GitHub](https://github.com/schams-net/pagetitle/) and click button "Clone or download" on the right hand side and follow the
link "Download ZIP". Save the ZIP file on your local machine.

Extract the folder from the downloaded ZIP file, e.g. `pagetitle-master/`. Open this folder with your favorite file manager and
create a new ZIP file. Depending on your operating system, this can usually be done by selecting all files and sub-folders, followed
by a right mouse button click and selecting "Compress" or "Create archive" or similar. Make sure, the file name of the new
ZIP file reads exactly `pagetitle.zip` and all files and folders exist on the root level of the ZIP archive.

Login at the backend of your empty TYPO3 instance using a backend user with administrator privileges. Open the Extension Manager and
upload the newly created ZIP file `pagetitle.zip`.

Continue with the step *Activate extension* below.

### Activate extension

In the TYPO3 backend, open **ADMIN TOOLS → Extensions** and search for "pagetitle". Activate the extension if not already activated.

### Add TypoScript template

In the TYPO3 backend, open **WEB → Templates** and select an appropriate page from the page tree. If in doubt, choose the root page.
Make sure, the dropdown box at the top shows function *Info/Modify* and click *Edit the whole template record*. In tab *General*,
include static item **Page Title (pagetitle)** by selecting the item in the right box (it will be moved to the left box). Save the
configuration.

### Add frontend plugin

Go to **WEB → Page** and select an appropriate page from the page tree. Add a new content element: Plugins → General Plugin.

In tab *Plugin*, select **Page Title [pagetitle_fe]** and save your changes.

## Usage

*To be documented.*  

## License

The MIT License

Copyright (c) 2018 Michael Schams, https://schams.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files
(the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge,
publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
