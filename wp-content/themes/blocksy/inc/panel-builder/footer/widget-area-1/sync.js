import ctEvents from 'ct-events'
import {
	getRootSelectorFor,
	assembleSelector,
	mutateSelector,
} from '../../../../static/js/customizer/sync/helpers'

export const handleWidgetAreaVariables = ({ selector }) => ({ itemId }) => ({
	horizontal_alignment: {
		selector: assembleSelector(
			mutateSelector({
				selector: getRootSelectorFor({
					itemId,
					panelType: 'footer',
				}),
				operation: 'replace-last',
				to_add: selector,
			})
		),
		variable: 'horizontal-alignment',
		responsive: true,
		unit: '',
	},

	vertical_alignment: {
		selector: assembleSelector(
			mutateSelector({
				selector: getRootSelectorFor({
					itemId,
					panelType: 'footer',
				}),
				operation: 'replace-last',
				to_add: selector,
			})
		),
		variable: 'vertical-alignment',
		responsive: true,
		unit: '',
	},
})

export const handleWidgetAreaOptions = ({
	selector,
	changeDescriptor: { optionId, optionValue, values },
}) => {}

ctEvents.on(
	'ct:footer:sync:collect-variable-descriptors',
	(variableDescriptors) => {
		variableDescriptors['widget-area-1'] = handleWidgetAreaVariables({
			selector: '[data-column="widget-area-1"]',
		})
	}
)

ctEvents.on('ct:footer:sync:item:widget-area-1', (changeDescriptor) =>
	handleWidgetAreaOptions({
		selector: '[data-column="widget-area-1"]',
		changeDescriptor,
	})
)
