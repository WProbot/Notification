/* global Vue */

import { fieldHandler } from '../fieldHandler';
import { inputsHandler } from '../inputsHandler';

Vue.component( 'recipient-row', {
	template: `
	<tr class="row">
		<td class="handle"><span class="handle-index">{{keyIndex + 1}}</span></td>
		<template v-for="( subfield, index ) in field">
			<td :class="'subfield' + subfield.name">
				<div class="row-field">
					<template
						v-if="subfield.options"
					>
					<select
					:id="subfield.id"
					:name="createFieldName(type, keyIndex, subfield) + '[' + subfield.name + ']'"
					:class="subfield.css_class"
					@change="selectChange( subfield, field, $event )">
					<template v-for="( option, key ) in subfield.options">
						<option :value="key" :selected="handleSelect( key, subfield.value )">{{option}}</option>
					</template>
					</select>
					</template>
					<input
					:id="subfield.id"
					:class="subfield.css_class"
					type="text"
					:value="subfield.value"
					:name="createFieldName(type, keyIndex, subfield) + '[' + subfield.name + ']'"
					:placeholder="subfield.placeholder"
					v-else>
					<small class="description"
						v-if="subfield.description"
						v-html="subfield.description">
						{{ subfield.description }}
					</small>
				</div>
			</td>
		</template>
		<td class="trash" @click="removeField(keyIndex, fields)"></td>
	</tr>
	`,
	props: ['field', 'keyIndex', 'fields', 'type'],
	mixins: [
		fieldHandler,
		inputsHandler
	]
} )
