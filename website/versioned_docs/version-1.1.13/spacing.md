---
id: version-1.1.13-spacing
title: Spacing
sidebar_label: Spacing
original_id: spacing
---

## How it works
Assign <code>margin</code> and <code>padding</code> properties to your components with a simple String respecting a predefined scale <a href="customize">customizable</a>

## Margin
<ul>
    <li><code>m</code> Margin all</li>
    <li><code>mt</code> Margin top</li>
    <li><code>mb</code> Margin bottom</li>
    <li><code>mr</code> Margin right</li>
    <li><code>ml</code> Margin left</li>
    <li><code>my</code> Margin top & margin bottom</li>
    <li><code>mx</code> Margin lett & margin right</li>
</ul>

## Pading
<ul>
    <li><code>p</code> Padding all</li>
    <li><code>pt</code> Padding top</li>
    <li><code>pb</code> Padding bottom</li>
    <li><code>pr</code> Padding right</li>
    <li><code>pl</code> Padding left</li>
    <li><code>py</code> Padding top & padding bottom</li>
    <li><code>px</code> Padding lett & padding right</li>
</ul>

## Apply scale
<p>
    To apply a scale you must add it after specifying a property <code>{prop}-{scale}</code>.
</p>
<ul>
    <li><em>The property can be any</em>:<code>margin</code> or <code>padding</code> <a href="#margin">predefined</a></li>
    <li><em>The scale value can be</em>: <code>auto || Integer >= 1</code></li>
</ul>

## Example

<div data-snack-id="@alantoledo007/spaicing" data-snack-platform="web" data-snack-preview="true" data-snack-theme="dark" style="overflow:hidden;background:#212733;border:1px solid rgba(0,0,0,.08);border-radius:4px;height:505px;width:100%"></div>
<script async src="https://snack.expo.io/embed.js"></script>