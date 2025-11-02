function findTheDifference(s: string, t: string): string {
    for (let i = 0; i < t.length; i++) {
        if (!s.includes(t[i]))
            return t[i];
    }
    return t[t.length - 1];
};


const s = "a";
const t = "aa";

console.log(findTheDifference(s, t));
