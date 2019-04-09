<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto styles - Language file
 *
 * @package    atto_styles
 * @copyright  2015 Andrew Davidson, Synergy Learning UK <andrew.davidson@synergy-learning.com> on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['config'] = 'Styles configuration';
$string['config_desc'] = 'Configuration for the styles widget for Atto in JSON format.
<hr />
For example:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue box",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue"<br />
&nbsp;&nbsp;&nbsp;&nbsp;"preview": true<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Red text",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "red"<br />
&nbsp;&nbsp;&nbsp;&nbsp;"preview": true<br />
}<br />
<hr />
The <em>title</em> attribute defines the name for style within the Atto styles widget.<br />
<br />
A title can also support the Moodle multilang filter (if enabled), but additonal double-quotes will need to be escaped with a backslash.<br />
Please have a look at the plugin’s README file for an example.<br />
<hr />
The <em>type</em> attribute can contain one of two values: "block" or "inline".<br />
<br />
"block" will create a div tag with the given class(es) and will act as a standard block level element. This will take over the current block level element and may apply to more than just the currently selected text.<br />
<br />
"inline" will create a span tag with the given class(es) and will act as a standard inline element. This will only apply to the currently selected text.
<hr />
The <em>classes</em> attribute takes the CSS class name which will be applied to the block / inline text.<br />
<br />
Multiple classes can be defined for each item, separated by a space. They will all be applied to the block / inline text.<br />
<br />
The CSS class definitions can\'t be made within this plugin. You will have to add your CSS class definitions to your theme or Moodle additional HTML settings.
<hr />
The <em>preview</em> attribute takes the boolean values true or false (default). If this value is set to true, then the style item will get a real preview of the style. Otherwise, the style item will just show its title in plain text.<br />
<br />
Please note, if you choose to show the preview for a style item, this class has to defined in CSS in a way that it can be applied to span tags, even if the style item itself is a block level element.
<hr />
On Moodle installations with bootstrap-based themes (especially <em>Boost</em>, <em>More</em> and <em>Clean</em>, you can also create styles with bootstrap CSS classes instead of defining your own classes.
<br /><br />
For example:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Success alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Info badge",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "badge badge-info"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Warning badge",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "badge badge-warning"<br />
}<br /><br />
For more information about bootstrap classes, please visit the following links in the Bootstrap 2.3 documenation (for <em>Clean</em> and <em>More</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap labels and badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap helper classes</a></li>
</ul>
or in the Bootstrap 4 documenation (for <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Bootstrap badges</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Bootstrap alerts</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Bootstrap utilities</a></li>
</ul>';
$string['inlinehint'] = 'Select some text first to apply this style';
$string['nostyle'] = 'No style';
$string['pluginname'] = 'Styles';
$string['privacy:metadata'] = 'The atto_styles plugin does not store any personal data.';
$string['settings'] = 'Styles settings';
