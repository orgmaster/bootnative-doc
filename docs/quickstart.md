---
id: quickstart
title: Quick Start
sidebar_label: Quick Start
---
<hr/>

## Installation

<p>
    You can install <b>Bootnative</b> using npm or yarn.
</p>

### npm
```
npm i bootnative
```

### yarn
```
yarn add bootnative
```

## Implementation

<p>Code</p>

``` javascript
import React from 'react';
import {View, Text} from 'react-native';

//import bootnative
import bootnative from 'bootnative';

//initialize
const bn = bootnative();

export default function App(){
    return (
        <View>
            <Text style={bn('mt-10 text-primary text-center')}>
                Hello word from Bootnative!
            </Text>
        </View>
    );
}
```
<p>Preview</p>
<img class="shadow" src="/img/screenshots/initialization.png"/>