

export default async function search(input){


    try{

        const result = await fetch(`${ballonData.root_url}/wp-json/ballon/v1/search?term=${input}`);

        const data = await result.json();
        // console.log(data);
        return data;
    }
    catch(err){
        console.log(err)
    }

}