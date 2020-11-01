---
id: version-1.1.13-container
title: Containers
sidebar_label: Container
original_id: container
---

<p>
Containers not only allow us to encapsulate content, but they are also the first step to a responsive design. A single design compatible with smart phones, tablets, smart TVs and desktops
</p>

<hr/>

## Containers type

**Bootnative**, like <a href="https://getbootstrap" title="Bootstrap containers" target="_blank">Bootstrap</a>, comes with 3 containers type:

- `container`, adopt the default breakpoint, `xs`.
- `container-fluid`, which sets a `width: 100%` at all breakpoints.
- `container-{breakpoint}`, when specifying a breakpoint, any greater than or equal to specified with `maxWidth` is honored, otherwise,`width: "100%"` is set.


||<576px, xs|>= 576, sm|>= 768, md|>= 992, lg|>= 1200, xl|
|-|:-:|:-:|:-:|:-:|:-:|
|`container`|<span class="text-muted">100%</span>|540px|720px|960px|1140px
| `container-sm`|<span class="text-muted">100%</span>|540px|720px|960px|1140px
| `container-md`|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|720px|960px|1140px
| `container-lg`|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|960px|1140px
| `container-xl`|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|1140px
| `container-fluid`|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>|<span class="text-muted">100%</span>