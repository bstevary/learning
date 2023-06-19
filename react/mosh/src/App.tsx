import Button from "./components/Button";
import Alert from "./components/Alert";
import { useState } from "react";
function App() {
  const [alertVisibility, setAlertVisiblity] = useState(false);
  return (
    <div>
      {alertVisibility && (
        <Alert onClose={() => setAlertVisiblity(false)}> My Alert</Alert>
      )}
      <Button color="primary" onClick={() => setAlertVisiblity(true)}>
        My Button
      </Button>
    </div>
  );
}
export default App;

// import Alert from "./components/Alert";
// function App() {
//   return (
//     <div>
//       <Alert>
//         <span>Hello there</span>
//       </Alert>
//     </div>
//   );
// }
// export default App;

// import ListGroup from "./components/ListGroup";
// function App() {
//   const items = ["stevary", "bosuben", "peter", "joseph", "john"];
//   const handleSelectItem = (item: string) => {
//     console.log(item);
//   };
//   return (
//     <div>
//       <ListGroup
//         items={items}
//         heading="Names"
//         onSelectItem={handleSelectItem}
//       />
//     </div>
//   );
// }
// export default App;
