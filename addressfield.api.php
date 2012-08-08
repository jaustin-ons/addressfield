<?php

/**
 * @file
 * API documentation for Addressfield.
 */

/**
 * Format generation callback.
 *
 * @param $format
 *   The address format being generated.
 * @param $address
 *   The address this format is generated for.
 * @param $context
 *   An array of context arguments:
 *     - 'mode': can be either 'form' or 'render'
 *     - (optional) 'field': when generated for a field, the field
 *     - (optional) 'instance': when generated for a field, the field instance
 *     - (optional) 'langcode': when generated for a field, the langcode
 *       this field is being rendered in.
 *     - (optional) 'delta': when generated for a field, the delta of the
 *       currently handled address.
 *
 * @ingroup addressfield_format
 */
function CALLBACK_addressfield_format_callback(&$format, $address, $context = array()) {

}

/**
 * Make changes or additions to addressfield values by altering the $items parameter by
 * reference. There is no return value.
 *
 * @param $items
 *   $entity->{$field['field_name']}[$langcode], or an empty array if unset.
 * @param $vars
 *   'entity_type'
 *     The type of $entity.
 *   'entity'
 *     The entity for the operation.
 *   'field'
 *     The field structure for the operation.
 *   'instance'
 *     The instance structure for $field on $entity's bundle.
 *   'langcode'
 *     The language associated with $items.
 */
function hook_addressfield_field_presave_alter(&$items, &$vars) {

}