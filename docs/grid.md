---
id: grid
title: Grid system
sidebar_label: Grid
---

The grid system allows creating designs adaptable to any device. Like Bootstrap, __Bootnative__ uses containers, rows, and columns.

<hr/>

## Row
`row` adapts to 100% container size, wrapping columns using `flexWrap` and `flexDirection` react-native properties.

## Col
The properties of the columns are applied if the breakpoint is correspond to the size of the device screen. If no corresponding breakpoint is provided, then the column will use 100% of the screen.

- Usage: `col-{size}-{breakpoint}`
- The `size` property can be `1~12`


## Try yourself

<div data-snack-id="@alantoledo007/grid-system" data-snack-platform="web" data-snack-preview="true" data-snack-theme="dark" style="overflow:hidden;background:#212733;border:1px solid rgba(0,0,0,.08);border-radius:4px;height:505px;width:100%"></div>
<script async src="https://snack.expo.io/embed.js"></script>