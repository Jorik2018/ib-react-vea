import React from 'react';

const lazyLoader = (importComp) => {
	return class extends React.Component {
		state: {
			component: null; //initializing state
		};

		//loading the component and setting it to state
		componentDidMount() {
			importComp().then((comp) => this.setState({ component: comp.default }));
		}
///
		//rendering the component
		render() {
			const C = this.state?.component;
			return C ? <C {...this.props} /> :<div style={{height:'100%',display:'flex',
			flexDirection: 'column',
			justifyContent: 'center'}}>Loading...</div>;
		}
	};
};
export default lazyLoader;