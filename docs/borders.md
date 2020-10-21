---
id: borders
title: Borders
sidebar_label: Borders
---

<p>Use border utilities to easily apply border styles to elements</p>

<hr />

## Border
Add borders to an element with border utilities. You can choose all borders or one at a time.

Border receives four ordered parameters: <span style="color: #7373ff">scale</span>, <span style="color: #7373ff">color</span>, <span style="color: #7373ff">style</span> & <span style="color: #7373ff">radius</span>.
If none of these parameters are received, default border is equal to <span style="color: #7373ff">border-1-black-solid-0</span>.

<b>Note:</b> if border receives unordered parameters the project may have compilation errors.

<div data-snack-id="@caldum/border" data-snack-platform="web" data-snack-preview="true" data-snack-theme="dark" style="overflow:hidden;background:#212733;border:1px solid rgba(0,0,0,.08);border-radius:4px;height:505px;width:100%"></div>
<script async src="https://snack.expo.io/embed.js"></script>

### Position
There are six border position properties: <span style="color: #7373ff">borderTop</span>, <span style="color: #7373ff">borderRight</span>, <span style="color: #7373ff">borderBottom</span>, <span style="color: #7373ff">borderLeft</span>, <span style="color: #7373ff">borderY</span> & <span style="color: #7373ff">borderX</span>.

Border position receives two ordered parameters: <span style="color: #7373ff">scale</span> & <span style="color: #7373ff">color</span>. If none of these parameters are received, default border[Position] is equal to <span style="color: #7373ff">border[Position]-1-black-solid-0</span>.

<b>Note:</b> if border position receives unordered parameters the project may have compilation errors.

<div data-snack-id="@caldum/border-side" data-snack-platform="web" data-snack-preview="true" data-snack-theme="dark" style="overflow:hidden;background:#212733;border:1px solid rgba(0,0,0,.08);border-radius:4px;height:505px;width:100%"></div>
<script async src="https://snack.expo.io/embed.js"></script>

## Size
Change the size of a declared border easily with borderSize.

Property borderSize receives two ordered parameters: <span style="color: #7373ff">scale</span> & <span style="color: #7373ff">position</span>.

## Color
Change the color of a declared border easily with borderColor.

Property borderColor receives two ordered parameters: <span style="color: #7373ff">color</span> & <span style="color: #7373ff">position</span>.

## Style
Change the style of a declared border easily with borderStyle.

Property borderStyle receives <span style="color: #7373ff">style</span> parameter.

## Radius
Change the radius of a declared border easily with borderRadius.

Property borderRadius receives three ordered parameters: <span style="color: #7373ff">radius</span>, <span style="color: #7373ff">position</span> & <span style="color: #7373ff">secondPosition</span>. The position parameter accepts four values: <span style="color: #7373ff">top</span>, <span style="color: #7373ff">right</span>, <span style="color: #7373ff">bottom</span> & <span style="color: #7373ff">left</span>. The secondPosition parameter accepts only <span style="color: #7373ff">right</span> & <span style="color: #7373ff">left</span> values.
If there's no secondPosition declared, radius will affect both position value corners.

