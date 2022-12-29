const Pet = (props) => {
	return React.createElement(
		'div',
		{},
		[
			React.createElement('h1', {}, props.name),
			React.createElement('h2', {}, props.animal),
			React.createElement('h3', {}, props.location)
		]
	)
}

const App = () => {
	return React.createElement(
		'div',
		{},
		[
			React.createElement('h1', {}, 'Personal Management System'),
			React.createElement(
				Pet,
				{
					name: 'Tomi',
					animal: 'Dog',
					location: 'Alberta'
				},
			),
			React.createElement(
				Pet,
				{
					name: 'Swiss',
					animal: 'Rabit',
					location: 'Regina'
				},
			),
			React.createElement(
				Pet,
				{
					name: 'Chim',
					animal: 'Cat',
					location: 'Beijing'
				},
			)
		]
	);
}

const container = document.getElementById('root');
const root = ReactDOM.createRoot(container);
root.render(React.createElement(App));